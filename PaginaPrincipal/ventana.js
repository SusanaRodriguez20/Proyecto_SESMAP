function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "block";
  }
  
  function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "none";
  }
  
  // Cierra la ventana emergente si se hace clic fuera de ella
  window.onclick = function (event) {
    var modals = document.getElementsByClassName("modal-card");
    for (var i = 0; i < modals.length; i++) {
      var modal = modals[i];
      if (event.target === modal) {
        modal.style.display = "none";
      }
    }
  };

  
  