{{-- @javascript("alert-confirm-${id}", $id) --}}

@push('script')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            @this.on('showConfirmAlert{{ $id }}', function() {
                Swal.fire({
                    title: 'Are You Sure?',
                    text: 'Order record will be deleted!',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: 'var(--success)',
                    cancelButtonColor: 'var(--primary)',
                    confirmButtonText: 'Delete!'
                }).then((result) => {
                    if (result.value) {
                        // confirms

                    } else {
                        // cancels
                    }
                });
            });
        })
    </script>
@endpush

@push('scripts')
    <script>
        console.log(window['dashboard-ui'])
        // document.getElementById(id).addEventListener("click", function() {
        //     Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonText: 'Yes, delete it!',
        //         cancelButtonText: 'No, cancel!',
        //         confirmButtonClass: 'btn btn-success mt-2',
        //         cancelButtonClass: 'btn btn-danger ms-2 mt-2',
        //         buttonsStyling: false
        //     }).then(function(result) {
        //         if (result.value) {
        //             Swal.fire({
        //                 title: 'Deleted!',
        //                 text: 'Your file has been deleted.',
        //                 icon: 'success',
        //                 confirmButtonColor: '#4a4fea',
        //             })
        //         } else if (
        //             // Read more about handling dismissals
        //             result.dismiss === Swal.DismissReason.cancel
        //         ) {
        //             Swal.fire({
        //                 title: 'Cancelled',
        //                 text: 'Your imaginary file is safe :)',
        //                 icon: 'error',
        //                 confirmButtonColor: '#4a4fea',
        //             })
        //         }
        //     });
        // });
    </script>
@endpush
