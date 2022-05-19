// after send request
sendAfterFromASide = function(data) {
    data = JSON.parse(data);
    switch(data.option){
        case "clear-cache-all":
            if (data.result == "OK"){
                dialogAlert('Successfully cleared all token cache data!');
            }
            break;
    }
},
reloadToken = function(){
    if(Web3.utils.isAddress($("#token_address").val())) {
        var tokenAddress = Web3.utils.toChecksumAddress($("#token_address").val());
        document.location.href = tokenUrl + '/' + tokenAddress;
    } else {
        dialogAlert("Invalid token address!<br>Please input valid token address");
    }
},
// init
$(function(){
    // filter token
    $("#token_address").on('keypress', function(e){
        e.preventDefault();
        reloadToken();
    });
    $("#token_show").on('click', function(e){
        e.preventDefault();
        reloadToken();
    });
    $("#clear_cache_all").on('click', function(e){
        e.preventDefault();
        var msgContent = "Are you going to clear all cache of token metadata?";
        dialogConfirm(msgContent, function(isOK){
            if(isOK) sendRequest(clearCacheUrl + "?address=all", sendAfterFromASide, "POST");
        });
    });
});