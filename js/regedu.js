regedumod=angular.module('regedumod',[]);

regedumod.controller('eduinfoctrl',eduinfoctrl).controller('cominfoctrl',cominfoctrl).factory('eduinfofactory',eduinfofactory);

function eduinfofactory(){
	var factory = function(){
		return new eduinfoservice();
	};
	return factory;
}

function eduinfoservice(){
	var service=this;
	var eduinfo=[];
	var cominfo=[];
	service.addedu=function(coursename,institutionname,boardname,year,markc){
		var info={course : coursename,institution:institutionname,board:boardname,passyear:year,mark:markc};
		eduinfo.push(info);
	};
	service.removedu=function(infoindex){
		eduinfo.splice(infoindex,1);
	};
	service.getinfo=function () {
		return eduinfo; 
	};
	//com info

	service.addcom=function(companyname,companyaddress,companycontact,joindate,enddate,companydesignation,companysalary,resigreason){
		var info={name : companyname,address:companyaddress,contact:companycontact,join:joindate,end:enddate,designation:companydesignation,salary:companysalary,reason:resigreason};
		cominfo.push(info);
	};
	service.removecom=function(infoindex){
		cominfo.splice(infoindex,1);
	};
	service.getcom=function () {
		return cominfo; 
	};
}
eduinfoctrl.$inject=['eduinfofactory'];
cominfoctrl.$inject=['eduinfofactory'];
function eduinfoctrl(eduinfofactory) {
	var list=this;
	var eduinfolist=eduinfofactory();
	list.eduinfo=eduinfolist.getinfo();
	list.course="";
list.institution="";
list.board="";
list.year="";
list.mark="";
list.addedu=function(){
	eduinfolist.addedu(list.course,list.institution,list.board,list.year,list.mark);
};
list.removedu=function(infoindex){
	eduinfolist.removedu(infoindex);
};
}
function cominfoctrl(eduinfofactory){
	var com=this;
	var cominfolist=eduinfofactory();
	com.cominfo=cominfolist.getcom();
	com.name="";
	com.address="";
	com.contact ="";
	com.join="";
	com.end="";
	com.designation="";
	com.salary="";
	com.reason="";
	com.addcom=function(){
		cominfolist.addcom(com.name,com.address,com.contact,com.join,com.end,com.designation,com.salary,com.reason);
	};
	com.removecom=function(infoindex){
	cominfolist.removecom(infoindex);
};
}