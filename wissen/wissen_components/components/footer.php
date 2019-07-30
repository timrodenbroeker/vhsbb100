<script>
	const s = sketch => {
	let shape01 = []; 
	let shape02 = [];
	const sketch1W = 300;

	let off = sketch1W / 6;
	let ig, pg;
	let xMin01 = 9999;
	let xMin02 = 9999;
	let yMin01 = 9999;
	let yMin02 = 9999;

	let xMax01 = -9999;
	let xMax02 = -9999;
	let yMax01 = -9999;
	let yMax02 = -9999;

	sketch.setup = () => {
		sketch.createCanvas(sketch1W, sketch1W);

		// creating the first shape
		shape01.push(sketch.createVector(off, off));
		shape01.push(sketch.createVector(sketch1W / 2 - off, off));
		shape01.push(sketch.createVector(sketch1W / 2, sketch1W - off));
		shape01.push(sketch.createVector(2 * off, sketch1W - off));

		// getting the min and the max to help create the gradient
		// This helps to avoid calculating unused pixels. The pixel array is exponential so,
		// yeah, the least, the best:);
		for (let i = 0; i < shape01.length; i++) {
			let px = shape01[i].x;
			let py = shape01[i].y;

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
		}

		//creating the second shape
		shape02.push(sketch.createVector(sketch1W / 2 + off, off));
		shape02.push(sketch.createVector(sketch1W - off, off));
		shape02.push(sketch.createVector(sketch1W - 2 * off, sketch1W - off));
		shape02.push(sketch.createVector(sketch1W / 2, sketch1W - off));

		//creating t600ee characters variables because i'm that lazy
		let igx = xMax01 - off;
		let igy = yMax01 - off;

		//the image that will hold the gradient.
		ig = sketch.createImage(igx, igy);

		//pretty basic pixel array from here

		ig.loadPixels();
		for (let x = 0; x < ig.width; x++) {
			for (let y = 0; y < ig.height; y++) {
				let id = (x + y * ig.width) * 4;
				// you can put the ig.pixels into variable and get crazy :)
				// Since we are creating the pixels, don't need to "access" it beforehand.
				let wavR = sketch.map(sketch.sin(sketch.radians(22 + x * 4 + y)), -1, 1, <?php echo($gradient_r_von); ?>, <?php echo($gradient_r_bis); ?>);
				let wavG = sketch.map(sketch.sin(sketch.radians(22 + x * 4 + y)), -1, 1, <?php echo($gradient_g_von); ?>, <?php echo($gradient_g_bis); ?>);
				let wavB = sketch.map(sketch.sin(sketch.radians(22 + x * 4 + y)), -1, 1, <?php echo($gradient_b_von); ?>, <?php echo($gradient_b_bis); ?>);

				ig.pixels[id + 0] = wavR;
				ig.pixels[id + 1] = wavG;
				ig.pixels[id + 2] = wavB;
				ig.pixels[id + 3] = 255;
			}
		}
		ig.updatePixels();

		//creating the mask that will well ... mask the gradient :).
		// For this example, it's my first shape.
		pg = sketch.createGraphics(igx, igy);

		//little issue here with the offset, but a translate fixed it.
		pg.translate(-off, -off);

		//creating the shape.
		pg.beginShape();
		for (let i = 0; i < shape01.length; i++) {
			let px = shape01[i].x;
			let py = shape01[i].y;

			pg.vertex(px, py);
		}
		pg.endShape(sketch.CLOSE);

		//easy p5 way of making a mask with 2 images
		ig.mask(pg);
	};

	sketch.draw = () => {
		sketch.clear();
		// background('BLUE');

		sketch.fill(0);
		sketch.noStroke();

		sketch.push();
		sketch.translate(sketch.width / 2, sketch.height / 2);
		// sketch.rotate(sketch.radians(sketch.map(sketch.sin(sketch.radians(sketch.frameCount * 0.3)), -1, 1, -10, 10)));

		sketch.rotate(sketch.radians(sketch.map(sketch.sin(sketch.radians(sketch.frameCount * 0.3)), -1, 1, -10, 10)));

		sketch.translate(-sketch.width / 2, -sketch.height / 2);
		let waveX = sketch.map(sketch.sin(sketch.radians(sketch.frameCount)), -1, 1, sketch1W / 12, 0);
		let waveY = sketch.map(sketch.cos(sketch.radians(sketch.frameCount)), -1, 1, -10, 10);
		//the image, masked and aligned right under the first shape
		sketch.image(ig, xMin01 + waveX, yMin01 + waveY);

		//First shape
		sketch.beginShape();

		for (let i = 0; i < shape01.length; i++) {
			let px = shape01[i].x + waveX;
			let py = shape01[i].y + waveY;
			sketch.vertex(px, py);
		}

		sketch.beginContour();

		// The second shape is built clockwise, i could have drawn it the right way
		// in the first place but since most of the graphic files 'count' the points
		//clockwisely. It's easier to think the shape clockwise since the rest of p5 is
		//built that way or if you want to load them from a file. The most easy and
		// straight forward solution is to read the array backward.

		for (let i = shape02.length - 1; i > -1; i--) {
			//if you want to keep track of the min/max of the shape, put the animation
			//while declaring px/py.

			// i should have used the second shape min/max to center it on the cursor, but
			// it's already late and i'm sure you can do it ;)

			let px = shape02[i].x - waveX;
			let py = shape02[i].y + waveY;

			sketch.vertex(px, py);
		}

		// always CLOSE the shapes :)
		sketch.endContour(sketch.CLOSE);
		sketch.endShape(sketch.CLOSE);
		sketch.pop();
	};
};
let myp5 = new p5(s, 'v');

const s2 = sketch => {
	let shape01 = [];
	let shape02 = [];
	let off = 140;
	let ig, pg;
	let xMin01 = 9999;
	let xMin02 = 9999;
	let yMin01 = 9999;
	let yMin02 = 9999;

	let xMax01 = -9999;
	let xMax02 = -9999;
	let yMax01 = -9999;
	let yMax02 = -9999;

	sketch.setup = () => {
		sketch.createCanvas(900, 900);

		// creating the first shape
		shape01.push(sketch.createVector(off, off));
		shape01.push(sketch.createVector(sketch.width / 2 - off, off));
		shape01.push(sketch.createVector(sketch.width / 2, sketch.height - off));
		shape01.push(sketch.createVector(2 * off, sketch.height - off));

		// getting the min and the max to help create the gradient
		// This helps to avoid calculating unused pixels. The pixel array is exponential so,
		// yeah, the least, the best:);
		for (let i = 0; i < shape01.length; i++) {
			let px = shape01[i].x;
			let py = shape01[i].y;

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
		}

		//creating the second shape
		shape02.push(sketch.createVector(sketch.width / 2 + off, off));
		shape02.push(sketch.createVector(sketch.width - off, off));
		shape02.push(sketch.createVector(sketch.width - 2 * off, sketch.height - off));
		shape02.push(sketch.createVector(sketch.width / 2, sketch.height - off));

		//creating three characters variables because i'm that lazy
		let igx = xMax01 - off;
		let igy = yMax01 - off;

		//the image that will hold the gradient.
		ig = sketch.createImage(igx, igy);

		//pretty basic pixel array from here

		ig.loadPixels();
		for (let x = 0; x < ig.width; x++) {
			for (let y = 0; y < ig.height; y++) {
				let id = (x + y * ig.width) * 4;
				// you can put the ig.pixels into variable and get crazy :)
				// Since we are creating the pixels, don't need to "access" it beforehand.
				let wavR = sketch.map(sketch.sin(sketch.radians(250 + x * 0.8 + y)), -1, 1, <?php echo($gradient_r_von); ?>, <?php echo($gradient_r_bis); ?>);
				let wavG = sketch.map(sketch.sin(sketch.radians(250 + x * 0.8 + y)), -1, 1, <?php echo($gradient_g_von); ?>, <?php echo($gradient_g_bis); ?>);
				let wavB = sketch.map(sketch.sin(sketch.radians(250 + x * 0.8 + y)), -1, 1, <?php echo($gradient_b_von); ?>, <?php echo($gradient_b_bis); ?>);

				ig.pixels[id + 0] = wavR;
				ig.pixels[id + 1] = wavG;
				ig.pixels[id + 2] = wavB;
				ig.pixels[id + 3] = 255;
			}
		}
		ig.updatePixels();

		//creating the mask that will well ... mask the gradient :).
		// For this example, it's my first shape.
		pg = sketch.createGraphics(igx, igy);

		//little issue here with the offset, but a translate fixed it.
		pg.translate(-off, -off);

		//creating the shape.
		pg.beginShape();
		for (let i = 0; i < shape01.length; i++) {
			let px = shape01[i].x;
			let py = shape01[i].y;

			pg.vertex(px, py);
		}
		pg.endShape(sketch.CLOSE);

		//easy p5 way of making a mask with 2 images
		ig.mask(pg);
	};

	sketch.draw = () => {
		sketch.clear();
		// background('BLUE');

		sketch.fill(0);
		sketch.noStroke();

		sketch.push();
		sketch.translate(sketch.width / 2, sketch.height / 2);
		sketch.rotate(sketch.radians(sketch.map(sketch.sin(sketch.radians(sketch.frameCount * 0.3)), -1, 1, -10, 10)));
		sketch.translate(-sketch.width / 2, -sketch.height / 2);
		let waveX = sketch.map(sketch.sin(sketch.radians(sketch.frameCount)), -1, 1, 50, 0);
		let waveY = sketch.map(sketch.cos(sketch.radians(sketch.frameCount)), -1, 1, -10, 10);
		//the image, masked and aligned right under the first shape
		sketch.image(ig, xMin01 + waveX, yMin01 + waveY);

		//First shape
		sketch.beginShape();

		for (let i = 0; i < shape01.length; i++) {
			let px = shape01[i].x + waveX;
			let py = shape01[i].y + waveY;
			sketch.vertex(px, py);
		}

		sketch.beginContour();

		// The second shape is built clockwise, i could have drawn it the right way
		// in the first place but since most of the graphic files 'count' the points
		//clockwisely. It's easier to think the shape clockwise since the rest of p5 is
		//built that way or if you want to load them from a file. The most easy and
		// straight forward solution is to read the array backward.

		for (let i = shape02.length - 1; i > -1; i--) {
			//if you want to keep track of the min/max of the shape, put the animation
			//while declaring px/py.

			// i should have used the second shape min/max to center it on the cursor, but
			// it's already late and i'm sure you can do it ;)

			let px = shape02[i].x - waveX;
			let py = shape02[i].y + waveY;

			sketch.vertex(px, py);
		}

		// always CLOSE the shapes :)
		sketch.endContour(sketch.CLOSE);
		sketch.endShape(sketch.CLOSE);
		sketch.pop();
	};
};
let myp52 = new p5(s2, 'sketch2');
</script>

<script src="../wissen_components/main.js"></script>
</body>
</html>
