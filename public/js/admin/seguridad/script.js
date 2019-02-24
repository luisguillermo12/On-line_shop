var associated = $("select[name='associated-permissions']");
var associated_container = $("#available-permissions");

if (associated.val() == "custom")
    associated_container.removeClass('hidden');
else
    associated_container.addClass('hidden');

associated.change(function() {
    if ($(this).val() == "custom")
        associated_container.removeClass('hidden');
    else
        associated_container.addClass('hidden');
});

$( "#create-role" ).submit(function( event ) {
  event.preventDefault(event);
  swal({
    title: '¿Está seguro de que quiere agregar el rol?',
    type: "warning",
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    confirmButtonColor: "#8CD4F5",
    confirmButtonText: 'Aceptar',
    closeOnConfirm: true
  }, function(confirmed) {
    if (confirmed) {
      $("#create-role").off("submit").submit();
    }
  });
});

$( "#edit-role" ).submit(function( event ) {
  event.preventDefault(event);
  swal({
    title: '¿Está seguro de que quiere agregar el rol?',
    type: "warning",
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    confirmButtonColor: "#8CD4F5",
    confirmButtonText: 'Aceptar',
    closeOnConfirm: true
  }, function(confirmed) {
    if (confirmed) {
      $("#edit-role").off("submit").submit();
    }
  });
});
