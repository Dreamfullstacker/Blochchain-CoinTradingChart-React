// ajax request
sendRequest = function(requestUrl, sendAfter, method, params){
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: requestUrl,
    type: method == undefined ? 'GET' : method,
    data: params,
    success: sendAfter
   });
},
// Bootbox Dialogs
dialogAlert = function(content, title, size, callback){
    msgContent = (content != undefined && content != '') ? content : 'Are you sure?';
    msgSize = (size != undefined && size != '') ? size : 'large';
    var options = { 
        size: "large",
        message: msgContent,
    };
    if(title != undefined && title != ''){
        options['title'] = title;
    }
    if(callback != undefined){
        options['callback'] = callback;
    }
    return bootbox.alert(options);
},
dialogConfirm = function(content, callback, title, size){
    msgContent = (content != undefined && content != '') ? content : 'Are you sure?';
    msgSize = (size != undefined && size != '') ? size : 'large';
    var options = { 
        size: "large",
        message: msgContent,
        callback: callback
    };
    if(title != undefined && title != ''){
        options['title'] = title;
    }
    return bootbox.confirm(options);
}