import swal from 'sweetalert2';
window.Swal = swal;

// @vue/component
export default {
    methods : {
        confirmRecordDeletion(event){
            event.preventDefault();

            Swal.fire({
                title: `Are you sure?`,
                text: `You won't be able to revert this!`,
                icon: `warning`,
                showCancelButton: true,
                cancelButtonColor: `#3085d6`,
                confirmButtonColor: `#d33`,
                confirmButtonText: `Yes, delete it!`
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        `Deleting!`,
                        `Please wait, record being deleted.`,
                        `info`
                    );
                    event.target.closest(`form`).submit();
                }
            });
        }
    }
}
