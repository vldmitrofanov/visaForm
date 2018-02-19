<script>
new Vue({
  el: '#otherParty',

  data: {
    relatives: [{
      counter: 0
    }],
    counter: 0
  },

  methods: {
    addAnother: function() {
        if(this.counter >= 8){
            return false;
        }
      this.relatives.push({
        counter: ++this.counter
      });
    }
  }
});
    
    var loadFile = function(event) {
    var output = document.getElementById('passportPhotoPreview');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
    
$( document ).ready(function() {
    const fullMonthNames = ['{{__('visa.Janurary')}}', '{{__('visa.Februbary')}}', '{{__('visa.March')}}', 
			'{{__('visa.April')}}', '{{__('visa.May')}}', '{{__('visa.June')}}', '{{__('visa.July')}}', '{{__('visa.August')}}',
                        '{{__('visa.September')}}', '{{__('visa.October')}}', '{{__('visa.Novermber')}}', '{{__('visa.December')}}'];
    const dayNamesMin = [ "{{__('visa.Su')}}","{{__('visa.Mo')}}","{{__('visa.Tu')}}",
        "{{__('visa.We')}}","{{__('visa.Th')}}","{{__('visa.Fr')}}","{{__('visa.Sa')}}" ];
 
 $("#bdDate").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: this.todayButton,
            yearRange: '-90:+0',
            monthNamesShort: fullMonthNames,
            dayNamesMin: dayNamesMin
  });
  
  $('#passportIssueDate').datepicker({
            changeMonth: true,
            changeYear: true,
            dayNamesMin: dayNamesMin,
            showButtonPanel: this.todayButton,
            yearRange: '-20:+0',
            monthNamesShort: fullMonthNames
  });
  
  $('#passportExpireDate').datepicker({
            changeMonth: true,
            changeYear: true,
            dayNamesMin: dayNamesMin,
            showButtonPanel: this.todayButton,
            yearRange: '-0:+20',
            monthNamesShort: fullMonthNames
  });
  
  $('#arrivalDate').datepicker({
            changeMonth: true,
            changeYear: true,
            dayNamesMin: dayNamesMin,
            showButtonPanel: this.todayButton,
            yearRange: '-0:+20',
            monthNamesShort: fullMonthNames
  });
  
  $('#departureDate').datepicker({
            changeMonth: true,
            changeYear: true,
            dayNamesMin: dayNamesMin,
            showButtonPanel: this.todayButton,
            yearRange: '-0:+20',
            monthNamesShort: fullMonthNames
  });
  
  $(".filtered-basic").keypress(function(event){
        var ew = event.which;
        if(ew === 32)
            return true;
        if(48 <= ew && ew <= 57)
            return true;
        if(65 <= ew && ew <= 90)
            return true;
        if(97 <= ew && ew <= 122)
            return true;
        return false;
    });
    
    $(".filtered-advanced").keypress(function(event){
        var ew = event.which;
        if(ew === 32)
            return true;
        if(ew === 46)
            return true;
        if(ew === 44)
            return true;
        if(48 <= ew && ew <= 57)
            return true;
        if(65 <= ew && ew <= 90)
            return true;
        if(97 <= ew && ew <= 122)
            return true;
        return false;
    });
    
    $("#travelWith").on('change',function() {
        if($(this).val()*1 == 2){
            $('#otherParty').show();
        } else {
            $('#otherParty').hide();
        }
    });
    
    $(".filtered-basic").on('input', function() {
        $(this).val($(this).val().replace(/[^a-z0-9 ]/gi, ''));
    });
    
    $(".filtered-advanced").on('input', function() {
        $(this).val($(this).val().replace(/[^a-z0-9 ,.]/gi, ''));
    });
    
    $(':file').on('fileselect', function(event, numFiles, label) {
        //console.log(numFiles);
        console.log(label);
        var input = $(this);
        var id = input.attr('id');
                //alert(id);
        $('#' + id + 'Description').html(label);
        
    });
    

//$("#imgInp").change(function() {
//  readURL(this);
//});
// end document ready
});

$(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});
</script>
