document.addEventListener("DOMContentLoaded", function () {
  // Pilih semua elemen dengan kelas "counter"
  const counters = document.querySelectorAll(".counter");

  // Buat IntersectionObserver untuk memantau kapan elemen muncul di layar
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        // Periksa apakah elemen terlihat di layar
        if (entry.isIntersecting) {
          const counter = entry.target; // Ambil elemen counter
          const target = +counter.getAttribute("data-target"); // Ambil angka target dari atribut data
          const duration = 2000; // Durasi animasi dalam milidetik
          const start = 0; // Mulai counter dari 0
          let startTime = null; // Inisialisasi waktu mulai

          // Fungsi untuk memperbarui nilai counter
          const updateCounter = (currentTime) => {
            if (!startTime) startTime = currentTime; // Tetapkan waktu mulai
            const elapsedTime = currentTime - startTime; // Hitung waktu yang telah berlalu
            const progress = Math.min(elapsedTime / duration, 1); // Hitung kemajuan (0 hingga 1)
            counter.textContent = Math.floor(progress * target) + "+"; // Perbarui teks konten counter
            if (progress < 1) {
              requestAnimationFrame(updateCounter); // Lanjutkan animasi jika belum selesai
            } else {
              counter.textContent = target + "+"; // Tetapkan nilai akhir setelah animasi selesai
            }
          };

          requestAnimationFrame(updateCounter); // Mulai animasi
          observer.unobserve(counter); // Berhenti mengamati setelah animasi selesai
        }
      });
    },
    { threshold: 0.1 } // Memicu ketika 10% elemen terlihat di layar
  );

  // Amati setiap elemen counter
  counters.forEach((counter) => observer.observe(counter));
});

const scriptURL = "https://script.google.com/macros/s/AKfycbzWmtYtXzNb8UfFd8anfTHxaJHNI_VbZc81-sIzZ1Uv-GxsBXmQZcESKSzv9xbcz4dT/exec";
const form = document.forms["submit-to-google-sheet"];
const successMessage = document.getElementById("success-message");
const submitButton = document.getElementById("submit");
const buttonText = document.getElementById("button-text");
const loadingSpinner = document.getElementById("loading-spinner");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  // Tampilkan loading spinner dan ubah teks tombol
  buttonText.textContent = "Loading...";
  loadingSpinner.classList.remove("hidden");
  submitButton.disabled = true; // Disable tombol untuk mencegah double submit

  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => {
      console.log("Success!", response);

      // Reset form
      form.reset();

      // Tampilkan pesan sukses
      successMessage.classList.remove("hidden");

      // Kembalikan tombol ke keadaan semula
      buttonText.textContent = "Send";
      loadingSpinner.classList.add("hidden");
      submitButton.disabled = false; // Aktifkan kembali tombol
    })
    .catch((error) => {
      console.error("Error!", error.message);

      // Kembalikan tombol ke keadaan semula meskipun ada error
      buttonText.textContent = "Send";
      loadingSpinner.classList.add("hidden");
      submitButton.disabled = false;
    });
});

function sendToWhatsApp(event) {
  event.preventDefault(); // Mencegah form melakukan submit tradisional

  const name = document.getElementById("name").value;
  const message = document.getElementById("message").value;

  const phoneNumber = "62895397015002"; // Ganti dengan nomor WhatsApp tujuan
  const url = `https://wa.me/${phoneNumber}?text=Nama: ${encodeURIComponent(name)}%0APesan: ${encodeURIComponent(message)}`;

  window.open(url, "_blank"); // Membuka WhatsApp di tab baru

  document.getElementById("contactForm").reset();
}
