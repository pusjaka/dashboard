// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
      scrollY: '100px',
      scrollCollapse: true,
       paging: false,
  });
});

$(document).ready(function() {
  var oTable = $('#dataTable-surat-tu').DataTable({
      "scrollY": '200px',
      "scrollCollapse": "true",
      paging: false,
      "dom": '<<t>ip>'
  });

  $('#searchInput1').keyup(function () {
      oTable.search($(this).val()).draw();
  });
});

$(document).ready(function() {
  var oTable = $('#dataTable-kegiatan-tu').DataTable({
      "scrollY": '100px',
      "scrollCollapse": "true",
      paging: false,
      "dom": '<<t>ip>'
  });

  $('#searchInput2').keyup(function () {
      oTable.search($(this).val()).draw();
  });
});

$(document).ready(function() {
  var oTable = $('#dataTable-kegiatan-pe').DataTable({
      "scrollY": '250px',
      "scrollCollapse": "true",
      paging: false,
      "dom": '<<t>ip>'
  });

  $('#searchInput3').keyup(function () {
      oTable.search($(this).val()).draw();
  });
});

$(document).ready(function() {
  var oTable = $('#dataTable-kegiatan-ptpp').DataTable({
      "scrollY": '250px',
      "scrollCollapse": "true",
      paging: false,
      "dom": '<<t>ip>'
  });

  $('#searchInput4').keyup(function () {
      oTable.search($(this).val()).draw();
  });
});

