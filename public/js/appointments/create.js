let $date;
let $doctor;

$(function() {
    $doctor = $("#doctor");
    $date=$('#date');


    $doctor.change(loadHours);
    $date.change(loadHours);

});

function loadHours(){
    const selectedDate= $date.val();
    const doctorId= $doctor.val();
    const url =`/horario/horas?date=${selectedDate}&doctor_id=${doctorId}`;

    $.getJSON(url,displayHours);
}


function displayHours(data){
    console.log(data);
}
