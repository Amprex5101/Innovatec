document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.steps ol li');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentStep = 0;

    // Función para actualizar los pasos
    function updateSteps() {
        steps.forEach((step, index) => {
            if (index === currentStep) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });
    }

    // Inicializa los pasos
    updateSteps();

    // Manejar el clic del botón "Siguiente"
    nextBtn.addEventListener('click', function() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            updateSteps();
        }
        if (currentStep >= steps.length) {
            currentStep++;
        }
        updateSteps();

    });
     // Manejar el clic del botón "Anterior"
     prevBtn.addEventListener('click', function() {
        if (currentStep  > 0) {
            currentStep--;
            updateSteps();
        }
        
    });

});

