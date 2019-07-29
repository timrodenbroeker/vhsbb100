"use strict";

var preloader = document.getElementById('preloader');
setTimeout(function () {
  $('#preloader').fadeOut();
}, 2200);
$('a[href^="#"]').on('click', function (e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);
  $('html, body').stop().animate({
    scrollTop: $target.offset().top
  }, 900, 'swing', function () {
    window.location.hash = target;
  });
}); // $('.gradient').ripples({
// 	resolution: 512,
// 	dropRadius: 20, //px
// 	perturbance: 0.04,
// });
// ScrollReveal().reveal('.sr', {});
// an attempt with Tim issue, the vertex way.

var s = function s(sketch) {
  var shape01 = [];
  var shape02 = [];
  var sketch1W = 300;
  var off = sketch1W / 6;
  var ig, pg;
  var xMin01 = 9999;
  var xMin02 = 9999;
  var yMin01 = 9999;
  var yMin02 = 9999;
  var xMax01 = -9999;
  var xMax02 = -9999;
  var yMax01 = -9999;
  var yMax02 = -9999;

  sketch.setup = function () {
    sketch.createCanvas(sketch1W, sketch1W); // creating the first shape

    shape01.push(sketch.createVector(off, off));
    shape01.push(sketch.createVector(sketch1W / 2 - off, off));
    shape01.push(sketch.createVector(sketch1W / 2, sketch1W - off));
    shape01.push(sketch.createVector(2 * off, sketch1W - off)); // getting the min and the max to help create the gradient
    // This helps to avoid calculating unused pixels. The pixel array is exponential so,
    // yeah, the least, the best:);

    for (var i = 0; i < shape01.length; i++) {
      var px = shape01[i].x;
      var py = shape01[i].y;

      if (px < xMin01) {
        xMin01 = px;
      }

      if (px > xMax01) {
        xMax01 = px;
      }

      if (py < yMin01) {
        yMin01 = py;
      }

      if (py > yMax01) {
        yMax01 = py;
      }
    } //creating the second shape


    shape02.push(sketch.createVector(sketch1W / 2 + off, off));
    shape02.push(sketch.createVector(sketch1W - off, off));
    shape02.push(sketch.createVector(sketch1W - 2 * off, sketch1W - off));
    shape02.push(sketch.createVector(sketch1W / 2, sketch1W - off)); //creating t600ee characters variables because i'm that lazy

    var igx = xMax01 - off;
    var igy = yMax01 - off; //the image that will hold the gradient.

    ig = sketch.createImage(igx, igy); //pretty basic pixel array from here

    ig.loadPixels();

    for (var x = 0; x < ig.width; x++) {
      for (var y = 0; y < ig.height; y++) {
        var id = (x + y * ig.width) * 4; // you can put the ig.pixels into variable and get crazy :)
        // Since we are creating the pixels, don't need to "access" it beforehand.

        var wavR = sketch.map(sketch.sin(sketch.radians(22 + x * 4 + y)), -1, 1, 0, 0);
        var wavG = sketch.map(sketch.sin(sketch.radians(22 + x * 4 + y)), -1, 1, 255, 0);
        var wavB = sketch.map(sketch.sin(sketch.radians(22 + x * 4 + y)), -1, 1, 0, 255);
        ig.pixels[id + 0] = wavR;
        ig.pixels[id + 1] = wavG;
        ig.pixels[id + 2] = wavB;
        ig.pixels[id + 3] = 255;
      }
    }

    ig.updatePixels(); //creating the mask that will well ... mask the gradient :).
    // For this example, it's my first shape.

    pg = sketch.createGraphics(igx, igy); //little issue here with the offset, but a translate fixed it.

    pg.translate(-off, -off); //creating the shape.

    pg.beginShape();

    for (var _i = 0; _i < shape01.length; _i++) {
      var _px = shape01[_i].x;
      var _py = shape01[_i].y;
      pg.vertex(_px, _py);
    }

    pg.endShape(sketch.CLOSE); //easy p5 way of making a mask with 2 images

    ig.mask(pg);
  };

  sketch.draw = function () {
    sketch.clear(); // background('BLUE');

    sketch.fill(0);
    sketch.noStroke();
    sketch.push();
    sketch.translate(sketch.width / 2, sketch.height / 2); // sketch.rotate(sketch.radians(sketch.map(sketch.sin(sketch.radians(sketch.frameCount * 0.3)), -1, 1, -10, 10)));

    sketch.rotate(sketch.radians(sketch.map(sketch.sin(sketch.radians(sketch.frameCount * 0.3)), -1, 1, -10, 10)));
    sketch.translate(-sketch.width / 2, -sketch.height / 2);
    var waveX = sketch.map(sketch.sin(sketch.radians(sketch.frameCount)), -1, 1, sketch1W / 12, 0);
    var waveY = sketch.map(sketch.cos(sketch.radians(sketch.frameCount)), -1, 1, -10, 10); //the image, masked and aligned right under the first shape

    sketch.image(ig, xMin01 + waveX, yMin01 + waveY); //First shape

    sketch.beginShape();

    for (var i = 0; i < shape01.length; i++) {
      var px = shape01[i].x + waveX;
      var py = shape01[i].y + waveY;
      sketch.vertex(px, py);
    }

    sketch.beginContour(); // The second shape is built clockwise, i could have drawn it the right way
    // in the first place but since most of the graphic files 'count' the points
    //clockwisely. It's easier to think the shape clockwise since the rest of p5 is
    //built that way or if you want to load them from a file. The most easy and
    // straight forward solution is to read the array backward.

    for (var _i2 = shape02.length - 1; _i2 > -1; _i2--) {
      //if you want to keep track of the min/max of the shape, put the animation
      //while declaring px/py.
      // i should have used the second shape min/max to center it on the cursor, but
      // it's already late and i'm sure you can do it ;)
      var _px2 = shape02[_i2].x - waveX;

      var _py2 = shape02[_i2].y + waveY;

      sketch.vertex(_px2, _py2);
    } // always CLOSE the shapes :)


    sketch.endContour(sketch.CLOSE);
    sketch.endShape(sketch.CLOSE);
    sketch.pop();
  };
};

var myp5 = new p5(s, 'v');

var s2 = function s2(sketch) {
  var shape01 = [];
  var shape02 = [];
  var off = 140;
  var ig, pg;
  var xMin01 = 9999;
  var xMin02 = 9999;
  var yMin01 = 9999;
  var yMin02 = 9999;
  var xMax01 = -9999;
  var xMax02 = -9999;
  var yMax01 = -9999;
  var yMax02 = -9999;

  sketch.setup = function () {
    sketch.createCanvas(900, 900); // creating the first shape

    shape01.push(sketch.createVector(off, off));
    shape01.push(sketch.createVector(sketch.width / 2 - off, off));
    shape01.push(sketch.createVector(sketch.width / 2, sketch.height - off));
    shape01.push(sketch.createVector(2 * off, sketch.height - off)); // getting the min and the max to help create the gradient
    // This helps to avoid calculating unused pixels. The pixel array is exponential so,
    // yeah, the least, the best:);

    for (var i = 0; i < shape01.length; i++) {
      var px = shape01[i].x;
      var py = shape01[i].y;

      if (px < xMin01) {
        xMin01 = px;
      }

      if (px > xMax01) {
        xMax01 = px;
      }

      if (py < yMin01) {
        yMin01 = py;
      }

      if (py > yMax01) {
        yMax01 = py;
      }
    } //creating the second shape


    shape02.push(sketch.createVector(sketch.width / 2 + off, off));
    shape02.push(sketch.createVector(sketch.width - off, off));
    shape02.push(sketch.createVector(sketch.width - 2 * off, sketch.height - off));
    shape02.push(sketch.createVector(sketch.width / 2, sketch.height - off)); //creating three characters variables because i'm that lazy

    var igx = xMax01 - off;
    var igy = yMax01 - off; //the image that will hold the gradient.

    ig = sketch.createImage(igx, igy); //pretty basic pixel array from here

    ig.loadPixels();

    for (var x = 0; x < ig.width; x++) {
      for (var y = 0; y < ig.height; y++) {
        var id = (x + y * ig.width) * 4; // you can put the ig.pixels into variable and get crazy :)
        // Since we are creating the pixels, don't need to "access" it beforehand.

        var wavR = sketch.map(sketch.sin(sketch.radians(250 + x * 0.8 + y)), -1, 1, 0, 0);
        var wavG = sketch.map(sketch.sin(sketch.radians(250 + x * 0.8 + y)), -1, 1, 255, 0);
        var wavB = sketch.map(sketch.sin(sketch.radians(250 + x * 0.8 + y)), -1, 1, 0, 255);
        ig.pixels[id + 0] = wavR;
        ig.pixels[id + 1] = wavG;
        ig.pixels[id + 2] = wavB;
        ig.pixels[id + 3] = 255;
      }
    }

    ig.updatePixels(); //creating the mask that will well ... mask the gradient :).
    // For this example, it's my first shape.

    pg = sketch.createGraphics(igx, igy); //little issue here with the offset, but a translate fixed it.

    pg.translate(-off, -off); //creating the shape.

    pg.beginShape();

    for (var _i3 = 0; _i3 < shape01.length; _i3++) {
      var _px3 = shape01[_i3].x;
      var _py3 = shape01[_i3].y;
      pg.vertex(_px3, _py3);
    }

    pg.endShape(sketch.CLOSE); //easy p5 way of making a mask with 2 images

    ig.mask(pg);
  };

  sketch.draw = function () {
    sketch.clear(); // background('BLUE');

    sketch.fill(0);
    sketch.noStroke();
    sketch.push();
    sketch.translate(sketch.width / 2, sketch.height / 2);
    sketch.rotate(sketch.radians(sketch.map(sketch.sin(sketch.radians(sketch.frameCount * 0.3)), -1, 1, -10, 10)));
    sketch.translate(-sketch.width / 2, -sketch.height / 2);
    var waveX = sketch.map(sketch.sin(sketch.radians(sketch.frameCount)), -1, 1, 50, 0);
    var waveY = sketch.map(sketch.cos(sketch.radians(sketch.frameCount)), -1, 1, -10, 10); //the image, masked and aligned right under the first shape

    sketch.image(ig, xMin01 + waveX, yMin01 + waveY); //First shape

    sketch.beginShape();

    for (var i = 0; i < shape01.length; i++) {
      var px = shape01[i].x + waveX;
      var py = shape01[i].y + waveY;
      sketch.vertex(px, py);
    }

    sketch.beginContour(); // The second shape is built clockwise, i could have drawn it the right way
    // in the first place but since most of the graphic files 'count' the points
    //clockwisely. It's easier to think the shape clockwise since the rest of p5 is
    //built that way or if you want to load them from a file. The most easy and
    // straight forward solution is to read the array backward.

    for (var _i4 = shape02.length - 1; _i4 > -1; _i4--) {
      //if you want to keep track of the min/max of the shape, put the animation
      //while declaring px/py.
      // i should have used the second shape min/max to center it on the cursor, but
      // it's already late and i'm sure you can do it ;)
      var _px4 = shape02[_i4].x - waveX;

      var _py4 = shape02[_i4].y + waveY;

      sketch.vertex(_px4, _py4);
    } // always CLOSE the shapes :)


    sketch.endContour(sketch.CLOSE);
    sketch.endShape(sketch.CLOSE);
    sketch.pop();
  };
};

var myp52 = new p5(s2, 'sketch2');