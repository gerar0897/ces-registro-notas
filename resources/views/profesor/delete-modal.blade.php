<!-- Button trigger modal -->

<span >
    <a type="button" class="btn btn-danger mr-2 open-deleteModal" data-grado="{{ $g->ID_GRADO }}" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip"
        data-bs-placement="top" title="Eliminar">
        <i class="fa-solid fa-trash"></i>
    </a>
</span>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Grado</h5>
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                </div>
                <div class="modal-body">
                    ¿Seguro que desea eliminar el Grado?

                    @method('delete')
                    @csrf
                    <input type="hidden" name="id_grado" id="id_grado" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Si, Eliminar</button>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#deleteModal').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id_grado = button.data('grado')
        let modal = $(this)
        modal.find('.modal-body #id_grado').val(id_grado);
    })
</script>
