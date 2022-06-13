import React from 'react'

function Buttons() {
  return (
    <div>
      <button onClick={()=>
      window.open("http://localhost/toy_bank1/event_details.php","_blank")}>Add Event</button>
      <button onClick={()=>
      window.open("http://localhost/toy_bank1/display_user.php","_blank")}>View Volunteer List</button>
    </div>
  )
}

export default Buttons