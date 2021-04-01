<script>
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var dayarray=new Array("Dilbata","Wixata","Kipxata","Roobi","Kamisa","Jimaata","Sanbata")
var montharray=new Array("Amajjii","Gurrandhala","Bitooteesa","Ebla","Caamsaa","Waxabajjii","Adoolessa","Haayya","Fulbaana","Onkololessa","Sadaasa","Muddee")
document.write("<font face='Arial'><b style='font-size:20px;color:#250615';>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"</b></font>")
</script>