const buildable = document.getElementById('buildable');

if (buildable) {
    buildable.addEventListener('click', e => {
        if (e.target.className === 'btn btn-danger upgradeControlHQ') {
            if (confirm('Are you sure?')) {
                const id = e.target.getAttribute('data-id');

                fetch(`/building/UpgradeControlHQ/${id}`, {
                    method: 'POST'
                }).then(res => window.location.reload());
            }
        }
    });
}