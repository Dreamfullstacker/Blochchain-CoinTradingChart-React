sendAfterFromToken = function(data){
    data = JSON.parse(data);
    switch(data.option){
        case 'clear-cache-item':
            if(data.result == 'OK'){
                dialogAlert("Successfully updated!<br>Please wait kindly during reload page. It will take few minutes");
                document.location.href = tokenUrl + '/' + Web3.utils.toChecksumAddress($("#metadata_address").val());
            } else {
                dialogAlert("Token Update Failed");
            }
            break;
    }
},
// init
$(function(){
    $("#clear_cache_item").on('click', function(e){
        e.preventDefault();
        var msgContent = "Are you going to update current token metadata?";
        dialogConfirm(msgContent, function(isOK){
            if(isOK) sendRequest(clearCacheUrl + '?address=' + Web3.utils.toChecksumAddress($('#metadata_address').val()), sendAfterFromToken, "POST");
        });
    });
});

