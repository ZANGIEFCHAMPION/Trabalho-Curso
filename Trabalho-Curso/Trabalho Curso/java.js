document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('quizForm');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      alert("Obrigado por participar do quiz!");
      // Aqui você poderia usar fetch() para enviar ao PHP, se tiver backend
    });
  }
});
