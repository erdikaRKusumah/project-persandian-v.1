function myFunction(val) {
      var text;
      if (val === 'Direktorat') {
          $('#no_telpon').val('0821234567');      
      } else if(val === 'Satuan Kerja'){
          $('#no_telpon').val('12345678');
      }else{
          $('#no_telpon').val('987654321');
      }
      
}