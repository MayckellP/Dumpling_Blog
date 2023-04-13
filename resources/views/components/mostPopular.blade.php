<style>
    .cont-rating{
        width:50%;
    }
    .container {
     font-size:15px;
     background-color: white;
     display: flex;
     align-items:center;
     gap: 14px;
     height:2rem;
     cursor: pointer;
     user-select: none;
     border-radius: 10px;
     box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
     color: black;
    }

    input:checked + .container svg {
     fill: hsl(0deg 100% 50%);
     stroke: hsl(0deg 100% 50%);
     animation: heartButton 1s;
    }

    @keyframes heartButton {
     0% {
      transform: scale(1);
     }

     25% {
      transform: scale(1.3);
     }

     50% {
      transform: scale(1);
     }

     75% {
      transform: scale(1.3);
     }

     100% {
      transform: scale(1);
     }
    }

    input + .container .action {
     position: relative;
     overflow: hidden;
     display: grid;
    }

    input + .container .action span {
     grid-column-start: 1;
     grid-column-end: 1;
     grid-row-start: 1;
     grid-row-end: 1;
     transition: all .5s;
    }

    input + .container .action span.option-1 {
     transform: translate(0px,0%);
     opacity: 1;
    }

    input:checked + .container .action span.option-1 {
     transform: translate(0px,-100%);
     opacity: 0;
    }

    input + label .action span.option-2 {
     transform: translate(0px,100%);
     opacity: 0;
    }

    input:checked + .container .action span.option-2 {
     transform: translate(0px,0%);
     opacity: 1;
    }
</style>

<div class="cont-rating">
    <input type="checkbox" id="favorite" name="favorite-checkbox" value="favorite-button" class="d-none">
    <label for="favorite" class="container">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
      <div class="action">
        <span class="option-1">Rating</span>
        <span class="option-2">Most Popular</span>
      </div>
    </label>
</div>