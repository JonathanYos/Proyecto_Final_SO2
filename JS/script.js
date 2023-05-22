// Código JavaScript para dar movimiento a la página

// Ejemplo de función de animación
function animateElement(element, animationClass) {
    element.classList.add('animated', animationClass);
  
    function handleAnimationEnd() {
      element.classList.remove('animated', animationClass);
      element.removeEventListener('animationend', handleAnimationEnd);
    }
  
    element.addEventListener('animationend', handleAnimationEnd);
  }
  
  // Ejemplo de uso de la función de animación
  const imgInicio = document.querySelector('#inicio img');
  animateElement(imgInicio, 'bounce');
  