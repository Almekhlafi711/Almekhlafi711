// Placeholder for optional interactive effects.
document.querySelectorAll('.card').forEach((card) => {
  card.addEventListener('mouseenter', () => card.classList.add('ring-2', 'ring-blue-300', 'dark:ring-yellow-400'));
  card.addEventListener('mouseleave', () => card.classList.remove('ring-2', 'ring-blue-300', 'dark:ring-yellow-400'));
});
