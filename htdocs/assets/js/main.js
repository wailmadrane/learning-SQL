(() => {

   /* ## Display forms ## */

   // toggle visibility on forms
   function showToggle(el) {
      el.classList.toggle('hide')
   }

   // transition between forms
   function hide(el) {
      if (!el.classList.contains('hide'))
         el.classList.add('hide')
   }

   // froms
   const signUp = document.getElementById('signUp')
   const signIn = document.getElementById('signIn')

   // display forms buttons 
   const signUpBtn = document.querySelectorAll('.sign-up-toggle')
   const signInBtn = document.querySelectorAll('.sign-in-toggle')

   // toggle hide event sing up
   signUpBtn.forEach(btn => {
      btn.addEventListener('click', () => {
         hide(signIn)
         showToggle(signUp)
      });
   })

   // toggle hide event sing in
   signInBtn.forEach(btn => {
      btn.addEventListener('click', () => {
         hide(signUp)
         showToggle(signIn)
      });
   })


   /* ## Label position for non focus field ## */

   function checkField(input) {
      if (input.value !== '' && !input.classList.contains('not-empty')) {
         input.classList.add('not-empty')
      }
      else if (input.value === '') {
         input.classList.remove('not-empty')
      }
   }

   const inputs = document.querySelectorAll('.login__field input')

   inputs.forEach(input => {
      checkField(input)

      input.addEventListener('focusout', () => {
         checkField(input)
      })
   })

})();