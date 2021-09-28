export default class Products {
    constructor(){
        this.data = {
            password: "Musicdatabase"
        }


        this.rootElem = document.querySelector('.products');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.nameSearch = this.filter.querySelector('.nameSearch');
    }

    async init(){
        this.nameSearch.addEventListener('input', () => {
            this.render();
        });

        await this.render();
    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3', 'd-flex', 'align-items-stretch');

            col.innerHTML = `
                <div class="card text-white border-0">
                    <img src="uploads/${item.musikImg}" class="card-img-top">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">${item.musikTitel}</h5>
                        <p class="card-text mb-4">${item.musikArtist}</p>
                        <a href="track.php?musikId=${item.musikId}" class="btn btn-primary text-white w-100 mt-auto">View details</a>
                    </div>
                </div>
            `;

            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);
    }

    async getData(){
        this.data.nameSearch = this.nameSearch.value;
        this.data.artistSearch = this.nameSearch.value;
        this.data.albumSearch = this.nameSearch.value;


        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }
}