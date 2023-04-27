import AdatModel from "../Model/AdatModel.js";
import ReceptekView from "../View/ReceptekView.js";


class Controller{
    constructor(){
        const token = $('meta[name="csrf-token"]').attr("content");
        const adatmodel = new AdatModel(token);

        adatmodel.adatBe("/minden", this.adatok);

        $(window).on("#leves", (event)=>{
            adatmodel.adatBe("/kategoriak", event.detail);
        });
    }
    adatok(tomb){
        const szuloElem = $('main');
        new ReceptekView(tomb, szuloElem)
    }
}

export default Controller;