$(function () {
  var path = window.location.href; // Mengambil data URL pada Address bar
  $(".nav-side ul li a").each(function () {
    // Jika URL pada menu ini sama persis dengan path...
    if (this.href === path) {
      // Tambahkan kelas "active" pada menu ini
      $(this)
        .parent()
        .parent()
        .parent()
        .children()
        .first()
        .removeClass("collapsed");
      $(this).parent().parent().addClass("show");
      $(this).addClass("active");
    }
  });

  $(".nav-side a").each(function () {
    // Jika URL pada menu ini sama persis dengan path...
    if (this.href === path) {
      // Tambahkan kelas "active" pada menu ini
      $(this).removeClass("collapsed");
    }
  });
});
