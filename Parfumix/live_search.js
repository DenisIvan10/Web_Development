document.getElementById('search-input').addEventListener('input', function () {
    const query = this.value.trim();

    if (query.length === 0) {
        document.getElementById('search-results').style.display = 'none';
        return;
    }

    fetch(`search_ajax.php?query=${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            const resultsContainer = document.getElementById('search-results');
            resultsContainer.innerHTML = '';

            if (data.length === 0) {
                resultsContainer.innerHTML = '<div class="dropdown-item text-muted">Niciun rezultat gasit.</div>';
            } else {
                data.forEach(item => {
                    resultsContainer.innerHTML += `
                        <a href="product_details.php?id=${item.id}" class="dropdown-item">
                            <div>
                                <div>${item.name}</div>
                                <small class="text-muted">${item.price} RON</small>
                            </div>
                        </a>
                    `;
                });
            }

            resultsContainer.style.display = 'block';
        })
        .catch(err => {
            console.error('Eroare la cautare:', err);
        });
});
