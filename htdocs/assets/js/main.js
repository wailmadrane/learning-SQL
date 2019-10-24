(() => {

   // hide and show login
   function showToggle(el) {
      el.classList.toggle('hide')
   }

   function hide(el) {
      if (!el.classList.contains('hide'))
         el.classList.add('hide')
   }

   // froms
   const signUp = document.getElementById('signUp')
   const signIn = document.getElementById('signIn')

   const signUpBtn = document.querySelectorAll('.sign-up-toggle')
   const signInBtn = document.querySelectorAll('.sign-in-toggle')

   // toggle hide event
   signUpBtn.forEach(btn => {
      btn.addEventListener('click', () => {
         hide(signIn)
         showToggle(signUp)
      });
   })

   signInBtn.forEach(btn => {
      btn.addEventListener('click', () => {
         hide(signUp)
         showToggle(signIn)
      });
   })

})();