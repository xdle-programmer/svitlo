const $magnet = document.querySelector('.magnet');

if ($magnet) {
    magnet($magnet);
}

function magnet($wrapper) {
    const $canvas = $wrapper.querySelector('.magnet__canvas');
    const $icon = document.querySelector('.intro__about-button-icon');
    let context = $canvas.getContext('2d');
    let width;
    let height;
    let circlePercent = {
        x: 81.5,
        y: 55,
        r: 9,
        shiftX: 6,
        shiftY: 4,
    };

    let circleSize = {};
    let mouseAreaRight = 0;
    let mouseAreaCenterHorizontal = 0;
    let mouseAreaCenter = 0;
    let mouseAreaPercentX = 0;
    let mouseAreaPercentY = 0;
    let shiftPxXArray = [];
    let shiftPxYArray = [];
    let lastShiftX = 0;
    let lastShiftY = 0;
    let currentShiftX = 0;
    let currentShiftY = 0;
    let initState = true;


    init();

    function init() {
        setSizes();

        addEventListener();

        draw();
    }

    function addEventListener() {

        window.addEventListener('mousemove', (event) => {
            let mouseX = event.clientX;
            let mouseY = event.clientY;

            let canvasTop = $canvas.getBoundingClientRect().top;
            let canvasBottom = $canvas.getBoundingClientRect().bottom;
            let canvasLeft = $canvas.getBoundingClientRect().left;
            let canvasRight = $canvas.getBoundingClientRect().right;

            if (mouseX < canvasLeft || mouseX > canvasRight || mouseY < canvasTop || mouseY > canvasBottom) {

                if (!initState) {
                    setInitShift();
                }

                return;
            }

            initState = false;
            let mouseInnerX = mouseX - canvasLeft;
            let mouseInnerY = mouseY - canvasTop;

            let shiftX = ((mouseInnerX - mouseAreaCenterHorizontal) / mouseAreaPercentX) * -1;
            let shiftY = ((mouseInnerY - mouseAreaCenter) / mouseAreaPercentY) * 2;

            if (shiftX < -200 || shiftX > 200) {
                if (!initState) {
                    setInitShift();
                }
                return;
            }

            if (shiftY < -100 || shiftY > 100) {
                if (!initState) {
                    setInitShift();
                }
                return;
            }

            setShiftX(shiftX);
            setShiftY(shiftY);
        });
    }

    function setShiftX(shiftX) {
        let fullShiftPxX = circleSize.shiftX / 100 * shiftX;
        let shiftPxX = fullShiftPxX - lastShiftX;
        shiftPxXArray.push(shiftPxX);
        lastShiftX = fullShiftPxX;
    }

    function setShiftY(shiftY) {
        let fullShiftPxY = circleSize.shiftY / 100 * shiftY;
        let shiftPxY = fullShiftPxY - lastShiftY;
        shiftPxYArray.push(shiftPxY);
        lastShiftY = fullShiftPxY;
    }

    function setInitShift() {
        let step = 3;
        let yMultiply = 1;
        let xMultiply = 1;

        if (lastShiftY < 0) {
            yMultiply = -1;
        }

        if (lastShiftX < 0) {
            xMultiply = -1;
        }

        calcYProgression();
        calcXProgression();

        $icon.style.transform = `none`;

        function calcYProgression() {
            let shiftY = lastShiftY / (circleSize.shiftY / 100);

            if (yMultiply === 1) {
                if (shiftY - step > 0) {
                    setShiftY(shiftY - step);
                    calcYProgression();
                } else {
                    setShiftY(0);
                }
            } else {
                if (shiftY + step < 0) {
                    setShiftY(shiftY + step);
                    calcYProgression();
                } else {
                    setShiftY(0);
                }
            }
        }

        function calcXProgression() {
            let shiftX = lastShiftX / (circleSize.shiftX / 100);

            if (xMultiply === 1) {
                if (shiftX - step > 0) {
                    setShiftX(shiftX - step);
                    calcXProgression();
                } else {
                    setShiftX(0);
                }
            } else {
                if (shiftX + step < 0) {
                    setShiftX(shiftX + step);
                    calcXProgression();
                } else {
                    setShiftX(0);
                }
            }
        }

        initState = true;
    }

    function setSizes() {
        width = $canvas.getBoundingClientRect().width;
        height = $canvas.getBoundingClientRect().height;
        $canvas.width = width;
        $canvas.height = height;

        circleSize['x'] = circlePercent.x * (width / 100);
        circleSize['y'] = circlePercent.y * (height / 100);
        circleSize['r'] = circlePercent.r * (width / 100);
        circleSize['shiftX'] = circlePercent.shiftX * (width / 100);
        circleSize['shiftY'] = circlePercent.shiftY * (width / 100);

        mouseAreaRight = (100 - (100 - circlePercent.x) * 2) * (width / 100);
        mouseAreaCenterHorizontal = circleSize['x'];
        mouseAreaCenter = height / 2;

        mouseAreaPercentX = mouseAreaRight / 100;
        mouseAreaPercentY = height / 100;
    }

    function draw() {
        let {x} = circleSize;
        let {y} = circleSize;
        let {r} = circleSize;
        let initRShift = r / 100 * 55.2334;
        let subShiftCoefficient = .2;
        let animationStep = 7;

        context.clearRect(0, 0, $canvas.width, $canvas.height);
        context.beginPath();
        context.fillStyle = '#768f94';

        if (shiftPxXArray.length > 0) {
            let fullShiftX = count(shiftPxXArray);
            shiftPxXArray = [];

            for (let index = 0; index < animationStep; index++) {
                shiftPxXArray.push(fullShiftX / animationStep);
            }

            currentShiftX += shiftPxXArray[0];
            shiftPxXArray.shift();
        }

        if (shiftPxYArray.length > 0) {
            let fullShiftY = count(shiftPxYArray);
            shiftPxYArray = [];

            for (let index = 0; index < animationStep; index++) {
                shiftPxYArray.push(fullShiftY / animationStep);
            }

            currentShiftY += shiftPxYArray[0];
            shiftPxYArray.shift();
        }


        let subShiftX = currentShiftX * subShiftCoefficient * -1;
        let subShiftY = currentShiftY * subShiftCoefficient;

        // $icon.style.transform = `translate(${subShiftX}px, ${subShiftY}px)`

        let triangleX = lastShiftX > 0 ? lastShiftX : -lastShiftX;
        let triangleY = lastShiftY > 0 ? lastShiftY : -lastShiftY;

        let angleMultiply = -1;

        if (lastShiftY < 0) {
            angleMultiply = 1;
        }

        // let triangleX = 31;
        // let triangleY = 31;

        // console.log(triangleX)

        $icon.style.transform = `translate(${subShiftX}px, ${subShiftY}px) rotate(${(Math.atan(triangleY / triangleX) * (180 / Math.PI)) * angleMultiply}deg)`;

        // Первая кривая (по часовой стрелке 12 - 3)
        let p1 = [x + subShiftX, y - r + subShiftY];
        let cp1_1 = [x + initRShift + subShiftX, y - r + subShiftY];
        let cp1_2 = [x + r + subShiftX, y - initRShift + subShiftY];

        // Вторая кривая (по часовой стрелке 3 - 6)
        let p2 = [x + r + subShiftX, y + subShiftY];
        let cp2_1 = [x + r + subShiftX, y + initRShift + subShiftY];
        let cp2_2 = [x + initRShift + subShiftX, y + r + subShiftY];

        // Третья кривая (по часовой стрелке 6 - 9)
        let p3 = [x + subShiftX, y + r + subShiftY];
        let cp3_1 = [x - initRShift + subShiftX, y + r + subShiftY];
        let cp3_2 = [x - r - currentShiftX, y + initRShift + currentShiftY];

        // Четвертая кривая (по часовой стрелке 9 - 12)
        let p4 = [x - r - currentShiftX, y + currentShiftY];
        let cp4_1 = [x - r - currentShiftX, y - initRShift + currentShiftY];
        let cp4_2 = [x - initRShift + subShiftX, y - r + subShiftY];

        context.moveTo(...p1);

        context.bezierCurveTo(...cp1_1, ...cp1_2, ...p2);
        context.bezierCurveTo(...cp2_1, ...cp2_2, ...p3);
        context.bezierCurveTo(...cp3_1, ...cp3_2, ...p4);
        context.bezierCurveTo(...cp4_1, ...cp4_2, ...p1);
        context.fill();

        requestAnimationFrame(draw);
    }

    function count(arr) {
        return arr.reduce((acc, num) => acc + num, 0);
    }

}