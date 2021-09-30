<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-in-Student Details</title>
    <link rel="stylesheet" href="marks.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="icon" href="./icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/1fcd11c729.js" crossorigin="anonymous"></script>
    <script src="marks.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js" ></script>
</head>
<body>
    <section class="h-100 h-custom" style="background-image: url(./lbi.jpg);background-size: cover;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card rounded-3">
                <img src="./d1.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                <div class="card-body p-4 p-md-5" >
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Marks Info</h3>
      
                  <form class="px-md-2" action="#" method="POST" enctype="multipart/form-data">
                      <div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                             <div class="form-outline">
                                 <input type="text" name="name" id="nid" class="form-control" />
                                 <label class="form-label" for="nid">Name</label>
                                 </div> 
                            </div>
                             <div class="col-md-6 mb-3">
                                 
                                 <div class="form-outline">
                                     <input type="text" name="usn" id="uid" class="form-control " />
                                     <label class="form-label" for="uid">USN</label>
                                 </div>
                                
                               
                             </div>      
                         </div>
                         <div>
                             <h2 class="p-2">-SEM1-</h2>
                         </div>
                         <div class="row">
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s1" class="form-control" id="sem1s1"/>
                               <label for="sem1s1" class="form-label">Subject1</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s2" class="form-control" id="sem1s2"/>
                               <label for="sem1s2" class="form-label">Subject2</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s3" class="form-control" id="sem1s3"/>
                               <label for="sem1s3" class="form-label">Subject3</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s4" class="form-control" id="sem1s4"/>
                               <label for="sem1s4" class="form-label">Subject4</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s5" class="form-control" id="sem1s5"/>
                               <label for="sem1s5" class="form-label">Subject5</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s1s6" class="form-control" id="sem1s6"/>
                               <label for="sem1s6" class="form-label">Subject6</label>
                             </div>
                           </div>  
                         </div>
     
     
                         <div class="row">
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m1" class="form-control" id="sem1m1"/>
                                 <label for="sem1m1" class="form-label">Marks1</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m2"  class="form-control" id="sem1m2"/>
                                 <label for="sem1m2" class="form-label">Marks2</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m3" class="form-control" id="sem1m3"/>
                                 <label for="sem1m3" class="form-label">Marks3</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m4" class="form-control" id="sem1m4"/>
                                 <label for="sem1m4" class="form-label">Marks4</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m5" class="form-control" id="sem1m5"/>
                                 <label for="sem1m5" class="form-label">Marks5</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s1m6" class="form-control" id="sem1m6"/>
                                 <label for="sem1m6" class="form-label">Marks6</label>
                               </div>
                             </div>  
                           </div>
     
     
                           <div class="row">
                             <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="sgpa1" class="form-control" id="sg1"/>
                                   <label for="sg1" class="form-label">SGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="cgpa1" class="form-control" id="cg1"/>
                                   <label for="cg1" class="form-label">CGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3 ">
                                 <div class="form-outline d-flex flex justify-content-between">
                                     <h6 class="mb-2 pb-1 fw-bold">Backlogs: </h6>
     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="s1b1" id="sem1b1" value="Yes"/>
                                       <label class="form-check-label" for="sem1b1">Yes</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="s1b1" id="sem1b2" value="No"/>
                                         <label class="form-check-label" for="sem1b2">No</label>
                                       </div>
                                 </div>
                               </div>
                           </div>
                      </div>
                      <div>
                        
                         <div>
                             <h2 class="p-2">-SEM2-</h2>
                         </div>
                         <div class="row">
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s2s1" class="form-control" id="sem2s1"/>
                               <label for="sem2s1" class="form-label">Subject1</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s2s2" class="form-control" id="sem2s2"/>
                               <label for="sem2s2" class="form-label">Subject2</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s2s3" class="form-control" id="sem2s3"/>
                               <label for="sem2s3" class="form-label">Subject3</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s2s4" class="form-control" id="sem2s4"/>
                               <label for="sem2s4" class="form-label">Subject4</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s2s5" class="form-control" id="sem2s5"/>
                               <label for="sem2s5" class="form-label">Subject5</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s2s6" class="form-control" id="sem2s6"/>
                               <label for="sem2s6" class="form-label">Subject6</label>
                             </div>
                           </div>  
                         </div>
     
     
                         <div class="row">
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s2m1" class="form-control" id="sem2m1"/>
                                 <label for="sem2m1" class="form-label">Marks1</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s2m2"  class="form-control" id="sem2m2"/>
                                 <label for="sem2m2" class="form-label">Marks2</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s2m3" class="form-control" id="sem2m3"/>
                                 <label for="sem2m3" class="form-label">Marks3</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s2m4" class="form-control" id="sem2m4"/>
                                 <label for="sem2m4" class="form-label">Marks4</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s2m5" class="form-control" id="sem2m5"/>
                                 <label for="sem2m5" class="form-label">Marks5</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s2m6" class="form-control" id="sem2m6"/>
                                 <label for="sem2m6" class="form-label">Marks6</label>
                               </div>
                             </div>  
                           </div>
     
     
                           <div class="row">
                             <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="sgpa2" class="form-control" id="sg2"/>
                                   <label for="sg2" class="form-label">SGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="cgpa2" class="form-control" id="cg2"/>
                                   <label for="cg2" class="form-label">CGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3 ">
                                 <div class="form-outline d-flex flex justify-content-between">
                                     <h6 class="mb-2 pb-1 fw-bold">Backlogs: </h6>
     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="s2b1" id="sem2b1" value="Yes"/>
                                       <label class="form-check-label" for="sem2b1">Yes</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="s2b1" id="sem2b2" value="No"/>
                                         <label class="form-check-label" for="sem2b2">No</label>
                                       </div>
                                 </div>
                               </div>
                           </div>
                      </div>
                      <div>
                       
                         <div>
                             <h2 class="p-2">-SEM3-</h2>
                         </div>
                         <div class="row">
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s3s1" class="form-control" id="sem3s1"/>
                               <label for="sem3s1" class="form-label">Subject1</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s3s2" class="form-control" id="sem3s2"/>
                               <label for="sem3s2" class="form-label">Subject2</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s3s3" class="form-control" id="sem3s3"/>
                               <label for="sem3s3" class="form-label">Subject3</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s3s4" class="form-control" id="sem3s4"/>
                               <label for="sem3s4" class="form-label">Subject4</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s3s5" class="form-control" id="sem3s5"/>
                               <label for="sem3s5" class="form-label">Subject5</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s3s6" class="form-control" id="sem3s6"/>
                               <label for="sem3s6" class="form-label">Subject6</label>
                             </div>
                           </div>  
                         </div>
     
     
                         <div class="row">
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s3m1" class="form-control" id="sem3m1"/>
                                 <label for="sem3m1" class="form-label">Marks1</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s3m2"  class="form-control" id="sem3m2"/>
                                 <label for="sem3m2" class="form-label">Marks2</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s3m3" class="form-control" id="sem3m3"/>
                                 <label for="sem3m3" class="form-label">Marks3</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s3m4" class="form-control" id="sem3m4"/>
                                 <label for="sem3m4" class="form-label">Marks4</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s3m5" class="form-control" id="sem3m5"/>
                                 <label for="sem3m5" class="form-label">Marks5</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s3m6" class="form-control" id="sem3m6"/>
                                 <label for="sem3m6" class="form-label">Marks6</label>
                               </div>
                             </div>  
                           </div>
     
     
                           <div class="row">
                             <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="sgpa3" class="form-control" id="sg3"/>
                                   <label for="sg3" class="form-label">SGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="cgpa3" class="form-control" id="cg3"/>
                                   <label for="cg3" class="form-label">CGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3 ">
                                 <div class="form-outline d-flex flex justify-content-between">
                                     <h6 class="mb-2 pb-1 fw-bold">Backlogs: </h6>
     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="s3b1" id="sem3b1" value="Yes"/>
                                       <label class="form-check-label" for="sem3b1">Yes</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="s3b1" id="sem3b2" value="No"/>
                                         <label class="form-check-label" for="sem3b2">No</label>
                                       </div>
                                 </div>
                               </div>
                           </div>
                      </div>
                      <div>
                        
                         <div>
                             <h2 class="p-2">-SEM4-</h2>
                         </div>
                         <div class="row">
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s4s1" class="form-control" id="sem4s1"/>
                               <label for="sem4s1" class="form-label">Subject1</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s4s2" class="form-control" id="sem4s2"/>
                               <label for="sem4s2" class="form-label">Subject2</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s4s3" class="form-control" id="sem4s3"/>
                               <label for="sem4s3" class="form-label">Subject3</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s4s4" class="form-control" id="sem4s4"/>
                               <label for="sem4s4" class="form-label">Subject4</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s4s5" class="form-control" id="sem4s5"/>
                               <label for="sem4s5" class="form-label">Subject5</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s4s6" class="form-control" id="sem4s6"/>
                               <label for="sem4s6" class="form-label">Subject6</label>
                             </div>
                           </div>  
                         </div>
     
     
                         <div class="row">
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s4m1" class="form-control" id="sem4m1"/>
                                 <label for="sem4m1" class="form-label">Marks1</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s4m2"  class="form-control" id="sem4m2"/>
                                 <label for="sem4m2" class="form-label">Marks2</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s4m3" class="form-control" id="sem4m3"/>
                                 <label for="sem4m3" class="form-label">Marks3</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s4m4" class="form-control" id="sem4m4"/>
                                 <label for="sem4m4" class="form-label">Marks4</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s4m5" class="form-control" id="sem4m5"/>
                                 <label for="sem4m5" class="form-label">Marks5</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s4m6" class="form-control" id="sem4m6"/>
                                 <label for="sem4m6" class="form-label">Marks6</label>
                               </div>
                             </div>  
                           </div>
     
     
                           <div class="row">
                             <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="sgpa4" class="form-control" id="sg4"/>
                                   <label for="sg4" class="form-label">SGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="cgpa4" class="form-control" id="cg4"/>
                                   <label for="cg4" class="form-label">CGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3 ">
                                 <div class="form-outline d-flex flex justify-content-between">
                                     <h6 class="mb-2 pb-1 fw-bold">Backlogs: </h6>
     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="s4b1" id="sem4b1" value="Yes"/>
                                       <label class="form-check-label" for="sem4b1">Yes</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="s4b1" id="sem4b2" value="No"/>
                                         <label class="form-check-label" for="sem4b2">No</label>
                                       </div>
                                 </div>
                               </div>
                           </div>
                      </div>
                      <div>
                       
                         <div>
                             <h2 class="p-2">-SEM5-</h2>
                         </div>
                         <div class="row">
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s5s1" class="form-control" id="sem5s1"/>
                               <label for="sem5s1" class="form-label">Subject1</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s5s2" class="form-control" id="sem5s2"/>
                               <label for="sem5s2" class="form-label">Subject2</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s5s3" class="form-control" id="sem5s3"/>
                               <label for="sem5s3" class="form-label">Subject3</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s5s4" class="form-control" id="sem5s4"/>
                               <label for="sem5s4" class="form-label">Subject4</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s5s5" class="form-control" id="sem5s5"/>
                               <label for="sem5s5" class="form-label">Subject5</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s5s6" class="form-control" id="sem5s6"/>
                               <label for="sem5s6" class="form-label">Subject6</label>
                             </div>
                           </div>  
                         </div>
     
     
                         <div class="row">
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s5m1" class="form-control" id="sem5m1"/>
                                 <label for="sem5m1" class="form-label">Marks1</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s5m2"  class="form-control" id="sem5m2"/>
                                 <label for="sem5m2" class="form-label">Marks2</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s5m3" class="form-control" id="sem5m3"/>
                                 <label for="sem5m3" class="form-label">Marks3</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s5m4" class="form-control" id="sem5m4"/>
                                 <label for="sem5m4" class="form-label">Marks4</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s5m5" class="form-control" id="sem5m5"/>
                                 <label for="sem5m5" class="form-label">Marks5</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s5m6" class="form-control" id="sem5m6"/>
                                 <label for="sem5m6" class="form-label">Marks6</label>
                               </div>
                             </div>  
                           </div>
     
     
                           <div class="row">
                             <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="sgpa5" class="form-control" id="sg5"/>
                                   <label for="sg5" class="form-label">SGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="cgpa5" class="form-control" id="cg5"/>
                                   <label for="cg5" class="form-label">CGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3 ">
                                 <div class="form-outline d-flex flex justify-content-between">
                                     <h6 class="mb-2 pb-1 fw-bold">Backlogs: </h6>
     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="s5b1" id="sem5b1" value="Yes"/>
                                       <label class="form-check-label" for="sem5b1">Yes</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="s5b1" id="sem5b2" value="No"/>
                                         <label class="form-check-label" for="sem5b2">No</label>
                                       </div>
                                 </div>
                               </div>
                           </div>
                      </div>
                      <div>
                        
                         <div>
                             <h2 class="p-2">-SEM6-</h2>
                         </div>
                         <div class="row">
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s6s1" class="form-control" id="sem6s1"/>
                               <label for="sem6s1" class="form-label">Subject1</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s6s2" class="form-control" id="sem6s2"/>
                               <label for="sem6s2" class="form-label">Subject2</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s6s3" class="form-control" id="sem6s3"/>
                               <label for="sem6s3" class="form-label">Subject3</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s6s4" class="form-control" id="sem6s4"/>
                               <label for="sem6s4" class="form-label">Subject4</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s6s5" class="form-control" id="sem6s5"/>
                               <label for="sem6s5" class="form-label">Subject5</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s6s6" class="form-control" id="sem6s6"/>
                               <label for="sem6s6" class="form-label">Subject6</label>
                             </div>
                           </div>  
                         </div>
     
     
                         <div class="row">
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s6m1" class="form-control" id="sem6m1"/>
                                 <label for="sem6m1" class="form-label">Marks1</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s6m2"  class="form-control" id="sem6m2"/>
                                 <label for="sem6m2" class="form-label">Marks2</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s6m3" class="form-control" id="sem6m3"/>
                                 <label for="sem6m3" class="form-label">Marks3</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s6m4" class="form-control" id="sem6m4"/>
                                 <label for="sem6m4" class="form-label">Marks4</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s6m5" class="form-control" id="sem6m5"/>
                                 <label for="sem6m5" class="form-label">Marks5</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s6m6" class="form-control" id="sem6m6"/>
                                 <label for="sem6m6" class="form-label">Marks6</label>
                               </div>
                             </div>  
                           </div>
     
     
                           <div class="row">
                             <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="sgpa6" class="form-control" id="sg6"/>
                                   <label for="sg6" class="form-label">SGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="cgpa6" class="form-control" id="cg6"/>
                                   <label for="cg6" class="form-label">CGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3 ">
                                 <div class="form-outline d-flex flex justify-content-between">
                                     <h6 class="mb-2 pb-1 fw-bold">Backlogs: </h6>
     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="s6b1" id="sem6b1" value="Yes"/>
                                       <label class="form-check-label" for="sem6b1">Yes</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="s6b1" id="sem6b2" value="No"/>
                                         <label class="form-check-label" for="sem6b2">No</label>
                                       </div>
                                 </div>
                               </div>
                           </div>
                      </div>
                      <div>
                       
                         <div>
                             <h2 class="p-2">-SEM7-</h2>
                         </div>
                         <div class="row">
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s7s1" class="form-control" id="exampleDatepicker1"/>
                               <label for="exampleDatepicker1" class="form-label">Subject1</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s7s2" class="form-control" id="exampleDatepicker2"/>
                               <label for="exampleDatepicker2" class="form-label">Subject2</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s7s3" class="form-control" id="exampleDatepicker3"/>
                               <label for="exampleDatepicker3" class="form-label">Subject3</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s7s4" class="form-control" id="exampleDatepicker4"/>
                               <label for="exampleDatepicker4" class="form-label">Subject4</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s7s5" class="form-control" id="exampleDatepicker5"/>
                               <label for="exampleDatepicker5" class="form-label">Subject5</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s7s6" class="form-control" id="exampleDatepicker6"/>
                               <label for="exampleDatepicker6" class="form-label">Subject6</label>
                             </div>
                           </div>  
                         </div>
     
     
                         <div class="row">
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s7m1" class="form-control" id="sem7m1"/>
                                 <label for="sem7m1" class="form-label">Marks1</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s7m2"  class="form-control" id="sem7m2"/>
                                 <label for="sem7m2" class="form-label">Marks2</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s7m3" class="form-control" id="sem7m3"/>
                                 <label for="sem7m3" class="form-label">Marks3</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s7m4" class="form-control" id="sem7m4"/>
                                 <label for="sem7m4" class="form-label">Marks4</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s7m5" class="form-control" id="sem7m5"/>
                                 <label for="sem7m5" class="form-label">Marks5</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s7m6" class="form-control" id="sem7m6"/>
                                 <label for="sem7m6" class="form-label">Marks6</label>
                               </div>
                             </div>  
                           </div>
     
     
                           <div class="row">
                             <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="sgpa7" class="form-control" id="sg7"/>
                                   <label for="sg7" class="form-label">SGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="cgpa7" class="form-control" id="cg7"/>
                                   <label for="cg7" class="form-label">CGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3 ">
                                 <div class="form-outline d-flex flex justify-content-between">
                                     <h6 class="mb-2 pb-1 fw-bold">Backlogs: </h6>
     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="s7b1" id="sem7b1" value="Yes"/>
                                       <label class="form-check-label" for="sem7b1">Yes</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="s7b1" id="sem7b2" value="No"/>
                                         <label class="form-check-label" for="sem7b2">No</label>
                                       </div>
                                 </div>
                               </div>
                           </div>
                      </div>
                      <div>
                       
                         <div>
                             <h2 class="p-2">-SEM8-</h2>
                         </div>
                         <div class="row">
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s8s1" class="form-control" id="exampleDatepicker1"/>
                               <label for="exampleDatepicker1" class="form-label">Subject1</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s8s2" class="form-control" id="exampleDatepicker2"/>
                               <label for="exampleDatepicker2" class="form-label">Subject2</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s8s3" class="form-control" id="exampleDatepicker3"/>
                               <label for="exampleDatepicker3" class="form-label">Subject3</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s8s4" class="form-control" id="exampleDatepicker4"/>
                               <label for="exampleDatepicker4" class="form-label">Subject4</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s8s5" class="form-control" id="exampleDatepicker5"/>
                               <label for="exampleDatepicker5" class="form-label">Subject5</label>
                             </div>
                           </div>  
                           <div class="col-md-2 mb-3">
                             <div class="form-outline">
                               <input type="text" name="s8s6" class="form-control" id="exampleDatepicker6"/>
                               <label for="exampleDatepicker6" class="form-label">Subject6</label>
                             </div>
                           </div>  
                         </div>
     
     
                         <div class="row">
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s8m1" class="form-control" id="sem8m1"/>
                                 <label for="sem8m1" class="form-label">Marks1</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s8m2"  class="form-control" id="sem8m2"/>
                                 <label for="sem8m2" class="form-label">Marks2</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s8m3" class="form-control" id="sem8m3"/>
                                 <label for="sem8m3" class="form-label">Marks3</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s8m4" class="form-control" id="sem8m4"/>
                                 <label for="sem8m4" class="form-label">Marks4</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s8m5" class="form-control" id="sem8m5"/>
                                 <label for="sem8m5" class="form-label">Marks5</label>
                               </div>
                             </div>  
                             <div class="col-md-2 mb-3">
                               <div class="form-outline">
                                 <input type="number" name="s8m6" class="form-control" id="sem8m6"/>
                                 <label for="sem8m6" class="form-label">Marks6</label>
                               </div>
                             </div>  
                           </div>
     
     
                           <div class="row">
                             <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="sgpa8" class="form-control" id="sg8"/>
                                   <label for="sg8" class="form-label">SGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3">
                                 <div class="form-outline">
                                   <input type="number" name="cgpa8" class="form-control" id="cg8"/>
                                   <label for="cg8" class="form-label">CGPA</label>
                                 </div>
                               </div>
                               <div class="col-md-4 mb-3 ">
                                 <div class="form-outline d-flex flex justify-content-between">
                                     <h6 class="mb-2 pb-1 fw-bold">Backlogs: </h6>
     
                                     <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="s8b1" id="sem8b1" value="Yes"/>
                                       <label class="form-check-label" for="sem8b1">Yes</label>
                                     </div>
                                     <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="s8b1" id="sem8b2" value="No"/>
                                         <label class="form-check-label" for="sem8b2">No</label>
                                       </div>
                                 </div>
                               </div>
                           </div>
                      </div>
                      
                   
      
                   
      
                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                     
                    </div>
      
                    <button type="submit" name="sub" class=" btn btn-success btn-lg mb-1">Submit</button>
      
                  </form>
      
                </div>
                <button id="download" class=" btn btn-danger shadow btn-lg m-3">Download PDF</button>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
<?php
$conn = mysqli_connect("localhost","root","","a_student");
// session_start();
error_reporting(0);
// if(isset($_SESSION['usn'])){
//           header("Location:login.php");
//       }
$name=$_POST['name'];
  $usn=$_POST['usn'];
  $sub11=$_POST['s1s1'];
  $mark11=$_POST['s1m1'];
$sub21=$_POST['s1s2'];
  $mark21=$_POST['s1m2'];
$sub31=$_POST['s1s3'];
  $mark31=$_POST['s1m3'];
$sub31=$_POST['s1s3'];
  $mark31=$_POST['s1m3'];
$sub41=$_POST['s1s4'];
  $mark41=$_POST['s1m4'];
$sub51=$_POST['s1s5'];
  $mark51=$_POST['s1m5'];
$sub61=$_POST['s1s6'];
  $mark61=$_POST['s1m6'];
$sgpa1=$_POST['sgpa1'];
$cgpa1=$_POST['cgpa1'];
$bl1=$_POST['s1b1'];

  $sub12=$_POST['s2s1'];
  $mark12=$_POST['s2m1'];
$sub22=$_POST['s2s2'];
  $mark22=$_POST['s2m2'];
$sub32=$_POST['s2s3'];
  $mark32=$_POST['s2m3'];
$sub32=$_POST['s2s3'];
  $mark32=$_POST['s2m3'];
$sub42=$_POST['s2s4'];
  $mark42=$_POST['s2m4'];
$sub52=$_POST['s2s5'];
  $mark52=$_POST['s2m5'];
$sub62=$_POST['s2s6'];
  $mark62=$_POST['s2m6'];
$sgpa2=$_POST['sgpa2'];
$cgpa2=$_POST['cgpa2'];
$bl2=$_POST['s2b1'];


$sub13=$_POST['s3s1'];
  $mark13=$_POST['s3m1'];
$sub23=$_POST['s3s2'];
  $mark23=$_POST['s3m2'];
$sub33=$_POST['s3s3'];
  $mark33=$_POST['s3m3'];
$sub33=$_POST['s3s3'];
  $mark33=$_POST['s3m3'];
$sub43=$_POST['s3s4'];
  $mark43=$_POST['s3m4'];
$sub53=$_POST['s3s5'];
  $mark52=$_POST['s3m5'];
$sub63=$_POST['s3s6'];
  $mark63=$_POST['s3m6'];
$sgpa3=$_POST['sgpa3'];
$cgpa3=$_POST['cgpa3'];
$bl3=$_POST['s3b1'];

$sub14=$_POST['s4s1'];
  $mark14=$_POST['s4m1'];
$sub24=$_POST['s4s2'];
  $mark24=$_POST['s4m2'];
$sub34=$_POST['s4s3'];
  $mark34=$_POST['s4m3'];
$sub34=$_POST['s4s3'];
  $mark34=$_POST['s4m3'];
$sub44=$_POST['s4s4'];
  $mark44=$_POST['s4m4'];
$sub54=$_POST['s4s5'];
  $mark54=$_POST['s4m5'];
$sub64=$_POST['s4s6'];
  $mark64=$_POST['s4m6'];
$sgpa4=$_POST['sgpa4'];
$cgpa4=$_POST['cgpa4'];
$bl4=$_POST['s4b1'];


$sub15=$_POST['s5s1'];
  $mark15=$_POST['s5m1'];
$sub25=$_POST['s5s2'];
  $mark25=$_POST['s5m2'];
$sub35=$_POST['s5s3'];
  $mark35=$_POST['s5m3'];
$sub35=$_POST['s5s3'];
  $mark35=$_POST['s5m3'];
$sub45=$_POST['s5s4'];
  $mark45=$_POST['s5m4'];
$sub55=$_POST['s5s5'];
  $mark55=$_POST['s5m5'];
$sub65=$_POST['s5s6'];
  $mark65=$_POST['s5m6'];
$sgpa5=$_POST['sgpa5'];
$cgpa5=$_POST['cgpa5'];
$bl5=$_POST['s5b1'];

$sub16=$_POST['s6s1'];
  $mark16=$_POST['s6m1'];
$sub26=$_POST['s6s2'];
  $mark26=$_POST['s6m2'];
$sub36=$_POST['s6s3'];
  $mark36=$_POST['s6m3'];
$sub36=$_POST['s6s3'];
  $mark36=$_POST['s6m3'];
$sub46=$_POST['s6s4'];
  $mark46=$_POST['s6m4'];
$sub56=$_POST['s6s5'];
  $mark56=$_POST['s6m5'];
$sub66=$_POST['s6s6'];
  $mark66=$_POST['s6m6'];
$sgpa6=$_POST['sgpa6'];
$cgpa2=$_POST['cgpa6'];
$bl6=$_POST['s6b1'];

$sub17=$_POST['s7s1'];
  $mark17=$_POST['s7m1'];
$sub27=$_POST['s7s2'];
  $mark27=$_POST['s7m2'];
$sub37=$_POST['s7s3'];
  $mark37=$_POST['s7m3'];
$sub37=$_POST['s7s3'];
  $mark37=$_POST['s7m3'];
$sub47=$_POST['s7s4'];
  $mark47=$_POST['s7m4'];
$sub57=$_POST['s7s5'];
  $mark57=$_POST['s7m5'];
$sub67=$_POST['s7s6'];
  $mark67=$_POST['s7m6'];
$sgpa7=$_POST['sgpa7'];
$cgpa7=$_POST['cgpa7'];
$bl7=$_POST['s7b1'];

$sub18=$_POST['s8s1'];
  $mark18=$_POST['s8m1'];
$sub28=$_POST['s8s2'];
  $mark28=$_POST['s8m2'];
$sub38=$_POST['s8s3'];
  $mark38=$_POST['s8m3'];
$sub38=$_POST['s8s3'];
  $mark38=$_POST['s8m3'];
$sub48=$_POST['s8s4'];
  $mark48=$_POST['s8m4'];
$sub58=$_POST['s8s5'];
  $mark58=$_POST['s8m5'];
$sub68=$_POST['s8s6'];
  $mark68=$_POST['s8m6'];
$sgpa8=$_POST['sgpa8'];
$cgpa8=$_POST['cgpa8'];
$bl8=$_POST['s8b1'];
if(isset($_POST['sub']) ){
  

    
      $query1= "INSERT INTO sem1(name,usn,sub1,mark1,sub2,mark2,sub3,mark3,sub4,mark4,sub5,mark5,sub6,mark6,cgpa,sgpa,bl) VALUES('$name','$usn','$sub11','$mark11','$sub21','$mark21','$sub31','$mark31','$sub41','$mark41','$sub51','$mark51','$sub61','$mark61','$cgpa1','$sgpa1','$bl1' )";
      $result = mysqli_query($conn,$query1);
      
      
      // $query2= "INSERT INTO sem2(name,usn,sub1,mark1,sub2,mark2,sub3,mark3,sub4,mark4,sub5,mark5,sub6,mark6,cgpa,sgpa,bl) VALUES('$name','$usn','$sub12','$mark12','$sub22','$mark22','$sub32','$mark32','$sub42','$mark42','$sub52','$mark52','$sub62','$mark62','$cgpa2','$sgpa2','$bl2' )";
      // $res1=mysqli_query($conn,$query2);
        if($result){
            echo "<script>alert('Registered Successfully!!')</script>";
        }
        else{
            echo "<script>alert('Oops USN already exists!')</script>";
        }
        
    
    
    // if($csem==2){
    //   $query1= "INSERT INTO sem1(name,usn,sub1,mark1,sub2,mark2,sub3,mark3,sub4,mark4,sub5,mark5,sub6,mark6,cgpa,sgpa,bl) VALUES('$name','$usn','$sub11','$mark11','$sub21','$mark21','$sub31','$mark31','$sub41','$mark41','$sub51','$mark51','$sub61','$mark61','$cgpa1','$sgpa1','$bl1' )";
    //   $query2= "INSERT INTO sem2(name,usn,sub1,mark1,sub2,mark2,sub3,mark3,sub4,mark4,sub5,mark5,sub6,mark6,cgpa,sgpa,bl) VALUES('$name','$usn','$sub12','$mark12','$sub22','$mark22','$sub32','$mark32','$sub42','$mark42','$sub52','$mark52','$sub62','$mark62','$cgpa2','$sgpa2','$bl2' )";
    //   $result = mysqli_query($conn,$query1,$query2);
    //   if($result){
    //     echo "<script>alert('Registered Successfully!!')</script>";
    // }
    // else{
    //     echo "<script>alert('Oops USN already exists!')</script>";
    // }
    //}
    // $query2= "INSERT INTO sem2(name,usn,sub1,mark1,sub2,mark2,sub3,mark3,sub4,mark4,sub5,mark5,sub6,mark6,cgpa,sgpa,bl) VALUES('$name','$usn','$sub12','$mark12','$sub22','$mark22','$sub32','$mark32','$sub42','$mark42','$sub52','$mark52','$sub62','$mark62','$cgpa2','$sgpa2','$bl2' )";
    
        
   

}


?>
</html>
