jobmod=angular.module('jobmod',[]);
// searchlist=
// ng-init="searchlist=['java tester','java developer','python developer','support engineer','Manager','Asst manager','HR manager','salesman','agent','team leader','receptionist','call center']";


jobmod.controller('searchctrl',searchctrl);

function searchctrl(){
    sctrl=this;
    this.searchlist=['java tester','java developer','python developer','support engineer','Manager','Asst manager','HR manager','salesman','agent','team leader','receptionist','call center'];
    sctrl.joblist=[];

sctrl.joblist.push({name:"Manager",company:"zoho",skillset:["mba","ba"],salary:10000,location:"madurai",time:"9-6",experience:15});
sctrl.joblist.push({name:"sub-Manager",company:"fedility",skillset:["mba","be"],salary:50000,location:"trichy",time:"9-6",experience:10});
sctrl.joblist.push({name:"data analyst",company:"zs",skillset:["python"],salary:60000,location:"banglore",time:"9-6",experience:6});
sctrl.joblist.push({name:"data scientist",company:"wipro",skillset:["data science"],salary:50000,location:"chennai",time:"9-6",experience:7});
sctrl.joblist.push({name:"system administrator",company:"TCS",skillset:["be"],salary:20000,location:"chennai",time:"9-6",experience:3});
sctrl.joblist.push({name:"QA TESTER",company:"CTS",skillset:["blockchain"],salary:60000,location:"noida",time:"9-6",experience:5});
sctrl.joblist.push({name:"network administrator",company:"deloite",skillset:["mba","ba"],salary:80000,location:"madurai",time:"9-6",experience:9});
sctrl.joblist.push({name:"database administrator",company:"google",skillset:["DBMS"],salary:60000,location:"banglore",time:"9-6",experience:5});
sctrl.joblist.push({name:"Information Security Analyst",company:"netflix",skillset:["blockchain"],salary:90000,location:"coimbatore",time:"9-6",experience:9});
sctrl.joblist.push({name:"Help Desk Technician",company:"facebook",skillset:["BA ENGLISH"],salary:30000,location:"chennai",time:"9-6",experience:4});
}

// jobmod.controller('jobcont',jobcont);


// function jobcont(){
//     var postjob=this;
//     var postjob.joblist=[];
//     
//     postjob.joblist.push(job);
// }