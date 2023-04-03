<style>
.cont-allMonth{
    width:35%;
    padding:0;
}
.container-month input {
  display: none;
}

.container-month {
  display:flex;
  flex-direction:row-reverse;
  align-items:center;
  justify-content:center;
  cursor: pointer;
  font-size: 15px;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
}

/* Create a custom checkbox */
.checkmark {
  position: relative;
  top: 0;
  left: 0;
  height: 1em;
  width: 1em;
  background-color: #2196F300;
  border-radius: 0.25em;
  transition: all 0.25s;
}

/* When the checkbox is checked, add a blue background */
.container-month input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  transform: rotate(0deg);
  border: 0.1em solid black;
  left: 0;
  top: 0;
  width: 1.05em;
  height: 1.05em;
  border-radius: 0.25em;
  transition: all 0.25s, border-width 0.1s;
}

/* Show the checkmark when checked */
.container-month input:checked ~ .checkmark:after {
  left: 0.45em;
  top: 0.25em;
  width: 0.25em;
  height: 0.5em;
  border-color: #fff0 white white #fff0;
  border-width: 0 0.15em 0.15em 0;
  border-radius: 0em;
  transform: rotate(45deg);
}

</style>


<div class="cont-allMonth">
    <label class="container-month">
      <input type="checkbox">
        All Month
      <div class="checkmark"></div>
    </label>
</div>