window.onload=function(){
    document.getElementById("download")
    .addEventListener("click",()=>{
        const totalcontainer=this.document.getElementById("totalcontainer");
        html2pdf().from(totalcontainer).save();
    })
}