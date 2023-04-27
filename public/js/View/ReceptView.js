class ReceptView{
    constructor(elem, szuloElem){
        szuloElem.append(`
            <tr>
                <td>${elem.recept_nev}</td>
                <td>${elem.nev}</td>
            </tr>
            
        `)
    }
}

export default ReceptView;