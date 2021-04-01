 let filter=document.getElementById('inpData').value.toUpperCase();
    let tabData=document.getElementById('tabData');
    let tr=tabData.getElementsByTagName('tr')[0];
    for(let i=0;i<tr.length;i++){
      let td=tr[i].getElementsByTagName('td')[0];
      if(td){
        let txtval=td.textContent || td.innerHTML;
        if(txtval.toUpperCase().indexOf(filter)>-1){
          tr[i].style.display="";
        }else{
          tr[i].style.display='none';
        }
      }
    }