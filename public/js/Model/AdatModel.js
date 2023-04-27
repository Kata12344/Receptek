class AdatModel{
    #tomb = [];
    #token;
    constructor(token) {
        this.#token = token;
    }

    adatBe(vegpont, myCallBack) {
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((data) => {
                console.log('Siker:', data);
                this.#tomb = data;
                myCallBack(this.#tomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    adatUj(vegpont, adat) {
        //console.log("elküld a modelben")
        console.log("ezt kéne megkapnia", adat)
        fetch(vegpont, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.#token
            },
            body: JSON.stringify(adat),
        })
            .then((response) => response.json())
            .catch((error) => {
                console.error('Error: nem jo', error);
            });
    }

    adatModosit(vegpont, adat) {
        console.log("ADATModosit ::", adat);
        fetch(vegpont, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.#token
            },
            body: JSON.stringify(adat),
        })
            /* .then((response) => response.json()) */
            .then(() => {
                console.log("sikeres mod");
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    adatTorol(vegpont, adat) {
        console.log("Töröl: " + adat);
        fetch(vegpont, {
            method: 'DELETE',
            headers: {

                'X-CSRF-TOKEN': this.token
            },
            body: JSON.stringify(adat),
        })
            .then()
            .then(() => {
                console.log("sikeres Törlés");
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

}

export default AdatModel;