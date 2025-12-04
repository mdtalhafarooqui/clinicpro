function validateBooking(){
  var p=document.getElementById('patient_id').value;
  var d=document.getElementById('doctor_id').value;
  var dt=document.getElementById('appt_date').value;
  var tm=document.getElementById('appt_time').value;
  if(!p||!d||!dt||!tm){alert('Please fill all required fields');return false}
  return true
}
