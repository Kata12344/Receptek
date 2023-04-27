import ReceptView from "./ReceptView.js";

class ReceptekView{
    constructor(tomb,szuloElem){
        szuloElem.append(`
        <div class="dropdown">
            <button class="dropbtn">Kategóriák</button>
            <div class="dropdown-content">
            <input type="button" class="kateg" id="leves" value="Leves">
            <input type="button" class="kateg" id="foetel" value="Főétel">
            <input type="button" class="kateg" id="edesseg" value="Édesség">
            <input type="button" class="kateg" id="salata" value="Saláta">
        </div>
        </div>
            <table>
            <thead></thead>
            <tbody>
            <tr>
                <th>Recept neve</th>
                <th>Kategória</th>
            </tr>
                
            </tbody>
            </table>
        `)
        this.divElem = szuloElem.children("div")
        this.tablaElem = szuloElem.children("table:last-child");
        this.tbodyElem = this.tablaElem.children("tbody");
        
        tomb.forEach(elem => {
            new ReceptView(elem, this.tbodyElem);
            console.log(elem)
        });

        this.levesElem=$("#leves");
        this.levesElem.on("click", ()=>{
            this.kattintastrigger()
            console.log("ff")
            
        })
        
        
    }
    kattintastrigger(esemenyNeve) {
            const esemeny = new CustomEvent(esemenyNeve, {
                detail: this.tomb,
            });
            window.dispatchEvent(esemeny);
        }
    
}

export default ReceptekView;