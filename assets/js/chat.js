	var db;
$(function(){
var config = {
    apiKey: "AIzaSyDQR6FILKICSOCV0RpfbFr4Rlncumv4Tws",
    authDomain: "copawt.firebaseapp.com",
    databaseURL: "https://copawt.firebaseio.com",
    projectId: "copawt",
    storageBucket: "copawt.appspot.com",
    messagingSenderId: "408673802743"
  };
  firebase.initializeApp(config);
db=firebase.firestore();
	const settings = { timestampsInSnapshots: true};
  db.settings(settings);

});


function search(el){

	$.each($('div.user_info>span'),function(i,e){
	if($(e).html().includes($(el).val())){
		$(e).parent().parent().parent().show();
				console.log($(e).parent().parent().parent())
	}else{
	$(e).parent().parent().parent().hide();
	}
	});
}

function chat(myID,id){

chatsRef=db.collection("chat");
chatsRef.where('user_'+myID,'==',true).where('user_'+id,'==',true)
	.get().then(function(querySnapshot) {
       // var cities = [];
	if(querySnapshot.size>0){
console.log(size);	}
        querySnapshot.forEach(function(doc) {
            console.log(doc.data());
			if(doc.data()==undefined){
		
			}else{}
        })});
}


function getChats(myID){
db.collection('chat').where("user_"+myID,'==',true).onSnapshot(function(snapshot){
snapshot.forEach(function(doc){
obj=doc.data();
	console.log(obj.indexOf("true"));
})
})
	

}