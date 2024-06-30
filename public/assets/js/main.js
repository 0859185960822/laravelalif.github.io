/**
* Template Name: iPortfolio
* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
* Updated: Mar 17 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos,
      behavior: 'smooth'
    })
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('body').classList.toggle('mobile-nav-active')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let body = select('body')
      if (body.classList.contains('mobile-nav-active')) {
        body.classList.remove('mobile-nav-active')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Hero type effect
   */
  const typed = select('.typed')
  if (typed) {
    let typed_strings = typed.getAttribute('data-typed-items')
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
      
    })
  }

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();
  
// blog mulai sini
document.addEventListener('DOMContentLoaded', function() {
  const postsDiv = document.getElementById('posts');
  const newPostForm = document.getElementById('newPostForm');
  const searchInput = document.getElementById('searchInput');

  // Ambil postingan dari localStorage
  let posts = JSON.parse(localStorage.getItem('posts')) || [];

  // Fungsi untuk menyimpan postingan ke localStorage
  function savePosts() {
      localStorage.setItem('posts', JSON.stringify(posts));
  }

  // Fungsi untuk menampilkan postingan
  function displayPosts(filteredPosts = posts) {
      postsDiv.innerHTML = ''; // Kosongkan konten sebelumnya

      // Loop melalui setiap postingan dan tampilkan di halaman
      filteredPosts.forEach((post, index) => {
          const article = document.createElement('article');

          const titleElement = document.createElement('h3');
          titleElement.textContent = post.title;

          const contentElement = document.createElement('p');
          contentElement.textContent = post.content;

          const dateElement = document.createElement('time');
          dateElement.dateTime = post.date; // Format ISO 8601
          dateElement.textContent = new Date(post.date).toLocaleDateString('id-ID');

          // Tambahkan tombol update dan delete
          const updateButton = document.createElement('button');
          updateButton.textContent = 'Update';
          updateButton.addEventListener('click', () => updatePost(index));

          const deleteButton = document.createElement('button');
          deleteButton.textContent = 'Delete';
          deleteButton.addEventListener('click', () => deletePost(index));

          // Tambahkan elemen ke dalam article
          article.appendChild(titleElement);
          article.appendChild(contentElement);
          article.appendChild(dateElement);
          article.appendChild(updateButton);
          article.appendChild(deleteButton);

          postsDiv.appendChild(article);
      });
  }

  // Fungsi untuk menambah postingan baru
  newPostForm.addEventListener('submit', function(event) {
      event.preventDefault();

      const title = document.getElementById('title').value;
      const content = document.getElementById('content').value;

      // Dapatkan tanggal saat ini
      const date = new Date().toISOString();

      // Tambahkan postingan ke array
      posts.push({ title, content, date });

      // Simpan postingan ke localStorage
      savePosts();

      // Tampilkan postingan baru
      displayPosts();

      // Reset form
      newPostForm.reset();
  });

  // Fungsi untuk memperbarui postingan
  function updatePost(index) {
      const newTitle = prompt('Masukkan judul baru:', posts[index].title);
      const newContent = prompt('Masukkan konten baru:', posts[index].content);

      if (newTitle !== null && newContent !== null) {
          posts[index].title = newTitle;
          posts[index].content = newContent;
          posts[index].date = new Date().toISOString(); // Perbarui tanggal

          // Simpan postingan ke localStorage
          savePosts();

          // Perbarui tampilan
          displayPosts();
      }
  }

  // Fungsi untuk menghapus postingan
  function deletePost(index) {
      posts.splice(index, 1); // Hapus postingan dari array

      // Simpan postingan ke localStorage
      savePosts();

      // Perbarui tampilan
      displayPosts();
  }

  // Fungsi untuk mencari postingan
  searchInput.addEventListener('input', function() {
      const searchTerm = searchInput.value.toLowerCase();

      // Filter postingan berdasarkan judul atau konten
      const filteredPosts = posts.filter(post => {
          return post.title.toLowerCase().includes(searchTerm) ||
                 post.content.toLowerCase().includes(searchTerm);
      });

      // Tampilkan postingan yang sesuai
      displayPosts(filteredPosts);
  });

  // Inisialisasi tampilan
  displayPosts();
});
document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.querySelector('.php-email-form');
  const loadingDiv = document.querySelector('.loading');
  const sentMessageDiv = document.querySelector('.sent-message');

  // Fungsi untuk menangani pengiriman formulir
  contactForm.addEventListener('submit', function(event) {
      event.preventDefault();

      // Tampilkan prompt konfirmasi kepada pengguna
      const isConfirmed = confirm('Apakah data yang Anda masukkan sudah benar?');

      // Jika pengguna mengkonfirmasi, lanjutkan pengiriman formulir
      if (isConfirmed) {
          // Tampilkan loading dan sembunyikan pesan yang sudah terkirim
          loadingDiv.style.display = 'block';
          sentMessageDiv.style.display = 'none';

          // Simulasi pengiriman data
          setTimeout(function() {
              // Sembunyikan loading dan tampilkan pesan yang sudah terkirim
              loadingDiv.style.display = 'none';
              sentMessageDiv.style.display = 'block';
          }, 2000);

          // Anda dapat menambahkan tindakan lain di sini, seperti mengirim data formulir ke server
          // atau melakukan validasi data tambahan jika diperlukan.
      }
  });
});


})();
