function generate(){
    var pet_names = ['Kayla','Miko','Violet','Dottie','Maddie','Schotzie','Moochie','Snoop','Susie','Abbie','Mickey','Presley','Charles','Edsel','Peter','Norton','Munchkin',
        'Nana','Koba','Hobbes','Coal','Luna','Linus','Flopsy','Missie','Dash','Harry','Star','Fluffy','Sabine','Bibbles','Koty','Jaguar','Pinky','Sunny','Shasta','Roxy',
        'Whitie','Bo','Dixie','Ebony','Rover','BJ','Wrinkles','Doogie','Justice','Pongo','Goldie','China','Tippy'];
    
    var rand_num = Math.floor(Math.random() * (pet_names.length) );
    document.getElementById('result').innerHTML = pet_names[rand_num]; 


}


