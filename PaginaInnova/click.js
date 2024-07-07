const steps = [
    { circle: document.getElementById('1'), content: document.getElementById('step1') },
    { circle: document.getElementById('2'), content: document.getElementById('step2') },
    { circle: document.getElementById('3'), content: document.getElementById('step3') }
];

let currentStep = 0;

document.getElementById('nextBtn').addEventListener('click', function() {
    if (currentStep < steps.length - 1) {
        steps[currentStep].circle.classList.remove('active');
        currentStep++;
        steps[currentStep].circle.classList.add('active');
    } else {
        steps[currentStep].circle.classList.remove('active');
        currentStep = 0;
        steps[currentStep].circle.classList.add('active');}
        });


