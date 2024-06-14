document.addEventListener("DOMContentLoaded", () => {
  const formulario = document.getElementById("formulario");
  const peso = document.getElementById("peso");
  const edad = document.getElementById("edad");
  const altura = document.getElementById("altura");

  const textChange = (e) => {
    objeto[e.target.name] = parseInt(e.target.value);
  };

  peso.addEventListener("change", textChange);
  edad.addEventListener("change", textChange);
  peso.addEventListener("change", textChange);
  altura.addEventListener("change", textChange);

  const objeto = { peso: 0, edad: 0, altura: 0 };

  formulario.addEventListener("submit", (e) => {
    e.preventDefault();
    const altura = objeto.altura  / 100;
    const bmi_total = (objeto.peso / (altura * altura)).toFixed(1);
    const input_bmi = document.getElementById("bmi");
    input_bmi.value = bmi_total;
  });
});
