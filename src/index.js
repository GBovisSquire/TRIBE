document.querySelectorAll(".toggle-header").forEach((header) => {
  header.addEventListener("click", () => {
    const toggle = header.parentElement;
    toggle.classList.toggle("active");
  });
});

new Typewriter(".typewriter", {
  strings: "Let's go on an adventure...",
  autoStart: true,
  cursor: "",
});
