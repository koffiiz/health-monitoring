<style>
    /*** End of helpers ***/
.glass, .water {
  height: 40vh;
  width: 302px;
  bottom: 24rem;
  border: 1px solid #000;
  border-width: 0 1px;
  position: absolute;
  left: calc(50% - 150px);
}
.glass:before, .glass:after, .water:before, .water:after {
  width: 300px;
  height: 100px;
  border-radius: 100%;
  border: 1px solid;
  content: "";
  display: block;
  position: absolute;
  left: -1px;
}
.glass:before, .water:before {
  top: -50px;
}
.glass:after, .water:after {
  bottom: -50px;
}

.glass {
  z-index: 5;
}
.glass:after {
  border: 1px solid rgba(0, 0, 0, 0.3);
  border-bottom: 1px solid #000;
}

.water {
  height: 25vh;
  background: rgba(124, 176, 228, 0.62);
  background: linear-gradient(rgba(124, 176, 228, 0.62), rgba(103, 185, 222, 0.62));
  animation: water 3s ease-in-out infinite;
}
.water:before, .water:after {
  background: #638eb9;
}
.water:before {
  border-color: rgba(0, 0, 0, 0.6);
}
.water:after {
  border: 0;
  background: #5b93b5;
}

.droplet {
  background: linear-gradient(to bottom, #fff, #39aed4);
  height: 5px;
  width: 5px;
  border-radius: 100%;
  opacity: 0;
  position: absolute;
  transform: translate3d(0, 50px, 0);
  z-index: 3;
}

.droplet:nth-child(1) {
  animation: fade1 6.46s ease-in infinite;
  bottom: 61.9747793992px;
  left: 120.5860377455px;
}

@keyframes fade1 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 22%;
  }
}
.droplet:nth-child(2) {
  animation: fade2 4.47s ease-in infinite;
  bottom: 41.2676635463px;
  left: 129.032601697px;
}

@keyframes fade2 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 97%;
  }
}
.droplet:nth-child(3) {
  animation: fade3 3.5s ease-in infinite;
  bottom: 22.9297569934px;
  left: 116.4925616545px;
}

@keyframes fade3 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 81%;
  }
}
.droplet:nth-child(4) {
  animation: fade4 6.31s ease-in infinite;
  bottom: 50.8141538927px;
  left: 118.3963933786px;
}

@keyframes fade4 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 41%;
  }
}
.droplet:nth-child(5) {
  animation: fade5 4.03s ease-in infinite;
  bottom: 39.4692708025px;
  left: 159.9282474946px;
}

@keyframes fade5 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 29%;
  }
}
.droplet:nth-child(6) {
  animation: fade6 3.2s ease-in infinite;
  bottom: 64.2402782044px;
  left: 166.5834463647px;
}

@keyframes fade6 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 92%;
  }
}
.droplet:nth-child(7) {
  animation: fade7 3.61s ease-in infinite;
  bottom: 74.9204868578px;
  left: 104.543960931px;
}

@keyframes fade7 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 100%;
  }
}
.droplet:nth-child(8) {
  animation: fade8 3.06s ease-in infinite;
  bottom: 47.049465132px;
  left: 123.910794478px;
}

@keyframes fade8 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 81%;
  }
}
.droplet:nth-child(9) {
  animation: fade9 7.52s ease-in infinite;
  bottom: 65.7378400797px;
  left: 67.3737031706px;
}

@keyframes fade9 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 97%;
  }
}
.droplet:nth-child(10) {
  animation: fade10 7.89s ease-in infinite;
  bottom: 40.3289221656px;
  left: 60.1391426188px;
}

@keyframes fade10 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 45%;
  }
}
.droplet:nth-child(11) {
  animation: fade11 3.93s ease-in infinite;
  bottom: 52.8224001613px;
  left: 39.1969936528px;
}

@keyframes fade11 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 38%;
  }
}
.droplet:nth-child(12) {
  animation: fade12 4.93s ease-in infinite;
  bottom: 22.0565233481px;
  left: 133.6742394893px;
}

@keyframes fade12 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 45%;
  }
}
.droplet:nth-child(13) {
  animation: fade13 5.68s ease-in infinite;
  bottom: 56.994595591px;
  left: 257.4775095823px;
}

@keyframes fade13 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 73%;
  }
}
.droplet:nth-child(14) {
  animation: fade14 7.96s ease-in infinite;
  bottom: 52.9852309398px;
  left: 127.5347856547px;
}

@keyframes fade14 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 80%;
  }
}
.droplet:nth-child(15) {
  animation: fade15 7.65s ease-in infinite;
  bottom: 57.1201391022px;
  left: 251.198754727px;
}

@keyframes fade15 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 61%;
  }
}
.droplet:nth-child(16) {
  animation: fade16 4.69s ease-in infinite;
  bottom: 29.6245482746px;
  left: 182.4181383521px;
}

@keyframes fade16 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 80%;
  }
}
.droplet:nth-child(17) {
  animation: fade17 6.5s ease-in infinite;
  bottom: 26.4226915749px;
  left: 164.2923123275px;
}

@keyframes fade17 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 80%;
  }
}
.droplet:nth-child(18) {
  animation: fade18 6.55s ease-in infinite;
  bottom: 34.1408750846px;
  left: 121.8430446795px;
}

@keyframes fade18 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 61%;
  }
}
.droplet:nth-child(19) {
  animation: fade19 5.22s ease-in infinite;
  bottom: 31.0799376836px;
  left: 207.3551678537px;
}

@keyframes fade19 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 71%;
  }
}
.droplet:nth-child(20) {
  animation: fade20 4.68s ease-in infinite;
  bottom: 44.8420918217px;
  left: 163.9231748051px;
}

@keyframes fade20 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 33%;
  }
}
.droplet:nth-child(21) {
  animation: fade21 6.9s ease-in infinite;
  bottom: 27.5870031021px;
  left: 90.2196838608px;
}

@keyframes fade21 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 94%;
  }
}
.droplet:nth-child(22) {
  animation: fade22 4.47s ease-in infinite;
  bottom: 46.7981433003px;
  left: 108.7054292965px;
}

@keyframes fade22 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 80%;
  }
}
.droplet:nth-child(23) {
  animation: fade23 3.14s ease-in infinite;
  bottom: 50.5427692618px;
  left: 76.5907950572px;
}

@keyframes fade23 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 29%;
  }
}
.droplet:nth-child(24) {
  animation: fade24 4.3s ease-in infinite;
  bottom: 30.49778192px;
  left: 79.1774598605px;
}

@keyframes fade24 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 60%;
  }
}
.droplet:nth-child(25) {
  animation: fade25 4.23s ease-in infinite;
  bottom: 41.4034863694px;
  left: 76.8928617915px;
}

@keyframes fade25 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 99%;
  }
}
.droplet:nth-child(26) {
  animation: fade26 7.65s ease-in infinite;
  bottom: 19.3882007448px;
  left: 172.6931371306px;
}

@keyframes fade26 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 29%;
  }
}
.droplet:nth-child(27) {
  animation: fade27 7.49s ease-in infinite;
  bottom: 52.2796308995px;
  left: 159.0554345281px;
}

@keyframes fade27 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 58%;
  }
}
.droplet:nth-child(28) {
  animation: fade28 4.46s ease-in infinite;
  bottom: 47.049465132px;
  left: 51.0007503427px;
}

@keyframes fade28 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 24%;
  }
}
.droplet:nth-child(29) {
  animation: fade29 5.73s ease-in infinite;
  bottom: 48.603066535px;
  left: 247.1360309971px;
}

@keyframes fade29 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 96%;
  }
}
.droplet:nth-child(30) {
  animation: fade30 4.39s ease-in infinite;
  bottom: 51.3026462283px;
  left: 78.8534075383px;
}

@keyframes fade30 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 42%;
  }
}
.droplet:nth-child(31) {
  animation: fade31 4.36s ease-in infinite;
  bottom: 44.8420918217px;
  left: 103.4907434438px;
}

@keyframes fade31 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 31%;
  }
}
.droplet:nth-child(32) {
  animation: fade32 7.57s ease-in infinite;
  bottom: 72.3313453661px;
  left: 180.7666570713px;
}

@keyframes fade32 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 47%;
  }
}
.droplet:nth-child(33) {
  animation: fade33 5.09s ease-in infinite;
  bottom: 67.1367591979px;
  left: 159.6009426322px;
}

@keyframes fade33 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 59%;
  }
}
.droplet:nth-child(34) {
  animation: fade34 3.24s ease-in infinite;
  bottom: 68.1859485365px;
  left: 170.780857918px;
}

@keyframes fade34 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 51%;
  }
}
.droplet:nth-child(35) {
  animation: fade35 3.54s ease-in infinite;
  bottom: 56.6448658114px;
  left: 254.5228014151px;
}

@keyframes fade35 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 55%;
  }
}
.droplet:nth-child(36) {
  animation: fade36 6.59s ease-in infinite;
  bottom: 26.1316136931px;
  left: 141.3569503179px;
}

@keyframes fade36 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 98%;
  }
}
.droplet:nth-child(37) {
  animation: fade37 6.16s ease-in infinite;
  bottom: 80.0987698412px;
  left: 147.4859861321px;
}

@keyframes fade37 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 46%;
  }
}
.droplet:nth-child(38) {
  animation: fade38 6.9s ease-in infinite;
  bottom: 53.2566155707px;
  left: 163.7153662259px;
}

@keyframes fade38 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 25%;
  }
}
.droplet:nth-child(39) {
  animation: fade39 5.85s ease-in infinite;
  bottom: 39.6841836433px;
  left: 172.6511351306px;
}

@keyframes fade39 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 27%;
  }
}
.droplet:nth-child(40) {
  animation: fade40 7.87s ease-in infinite;
  bottom: 43.8749840382px;
  left: 178.5846246549px;
}

@keyframes fade40 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 29%;
  }
}
.droplet:nth-child(41) {
  animation: fade41 3.1s ease-in infinite;
  bottom: 78.1569137224px;
  left: 174.875169547px;
}

@keyframes fade41 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 87%;
  }
}
.droplet:nth-child(42) {
  animation: fade42 4.59s ease-in infinite;
  bottom: 68.1859485365px;
  left: 169.5749416078px;
}

@keyframes fade42 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 40%;
  }
}
.droplet:nth-child(43) {
  animation: fade43 3.68s ease-in infinite;
  bottom: 81.0696979006px;
  left: 119.4292131613px;
}

@keyframes fade43 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 93%;
  }
}
.droplet:nth-child(44) {
  animation: fade44 6.02s ease-in infinite;
  bottom: 49.262366283px;
  left: 180.4393522089px;
}

@keyframes fade44 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 32%;
  }
}
.droplet:nth-child(45) {
  animation: fade45 3.29s ease-in infinite;
  bottom: 65.0383805206px;
  left: 200.9687158844px;
}

@keyframes fade45 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 72%;
  }
}
.droplet:nth-child(46) {
  animation: fade46 6.55s ease-in infinite;
  bottom: 31.9279739337px;
  left: 141.2009514623px;
}

@keyframes fade46 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 45%;
  }
}
.droplet:nth-child(47) {
  animation: fade47 3.88s ease-in infinite;
  bottom: 39.2301183737px;
  left: 149.5198305732px;
}

@keyframes fade47 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 96%;
  }
}
.droplet:nth-child(48) {
  animation: fade48 4.34s ease-in infinite;
  bottom: 58.7383525345px;
  left: 105.9844692114px;
}

@keyframes fade48 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 51%;
  }
}
.droplet:nth-child(49) {
  animation: fade49 3.72s ease-in infinite;
  bottom: 21.1832897027px;
  left: 218.3276263668px;
}

@keyframes fade49 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 47%;
  }
}
.droplet:nth-child(50) {
  animation: fade50 7.66s ease-in infinite;
  bottom: 45.0516760096px;
  left: 167.019852848px;
}

@keyframes fade50 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 78%;
  }
}
.droplet:nth-child(51) {
  animation: fade51 4.71s ease-in infinite;
  bottom: 44.0989302641px;
  left: 170.620206335px;
}

@keyframes fade51 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 90%;
  }
}
.droplet:nth-child(52) {
  animation: fade52 5.2s ease-in infinite;
  bottom: 35.9849593771px;
  left: 147.5991528661px;
}

@keyframes fade52 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 62%;
  }
}
.droplet:nth-child(53) {
  animation: fade53 7.32s ease-in infinite;
  bottom: 43.9824404586px;
  left: 96.9543073872px;
}

@keyframes fade53 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 43%;
  }
}
.droplet:nth-child(54) {
  animation: fade54 7.73s ease-in infinite;
  bottom: 35.7371837922px;
  left: 87.5543194469px;
}

@keyframes fade54 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 95%;
  }
}
.droplet:nth-child(55) {
  animation: fade55 5.83s ease-in infinite;
  bottom: 52.4967386042px;
  left: 150.4156171584px;
}

@keyframes fade55 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 58%;
  }
}
.droplet:nth-child(56) {
  animation: fade56 5.29s ease-in infinite;
  bottom: 82.524869498px;
  left: 79.6076116987px;
}

@keyframes fade56 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 95%;
  }
}
.droplet:nth-child(57) {
  animation: fade57 5.75s ease-in infinite;
  bottom: 43.8749840382px;
  left: 151.8702772126px;
}

@keyframes fade57 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 90%;
  }
}
.droplet:nth-child(58) {
  animation: fade58 5.18s ease-in infinite;
  bottom: 52.4481084568px;
  left: 89.6636671703px;
}

@keyframes fade58 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 36%;
  }
}
.droplet:nth-child(59) {
  animation: fade59 4.43s ease-in infinite;
  bottom: 53.039507866px;
  left: 153.3821502454px;
}

@keyframes fade59 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 62%;
  }
}
.droplet:nth-child(60) {
  animation: fade60 4.51s ease-in infinite;
  bottom: 36.3193395558px;
  left: 160.5828572196px;
}

@keyframes fade60 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 80%;
  }
}
.droplet:nth-child(61) {
  animation: fade61 6.91s ease-in infinite;
  bottom: 55.8255683564px;
  left: 75.0823867365px;
}

@keyframes fade61 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 37%;
  }
}
.droplet:nth-child(62) {
  animation: fade62 5.73s ease-in infinite;
  bottom: 47.0986766497px;
  left: 182.4031813836px;
}

@keyframes fade62 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 97%;
  }
}
.droplet:nth-child(63) {
  animation: fade63 5.04s ease-in infinite;
  bottom: 48.524732566px;
  left: 159.9748118006px;
}

@keyframes fade63 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 73%;
  }
}
.droplet:nth-child(64) {
  animation: fade64 6.36s ease-in infinite;
  bottom: 44.0989302641px;
  left: 180.5484538297px;
}

@keyframes fade64 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 72%;
  }
}
.droplet:nth-child(65) {
  animation: fade65 6.58s ease-in infinite;
  bottom: 58.0437849296px;
  left: 154.6913696953px;
}

@keyframes fade65 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 100%;
  }
}
.droplet:nth-child(66) {
  animation: fade66 6.37s ease-in infinite;
  bottom: 51.0491893386px;
  left: 65.8506377913px;
}

@keyframes fade66 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 38%;
  }
}
.droplet:nth-child(67) {
  animation: fade67 3.39s ease-in infinite;
  bottom: 58.7383525345px;
  left: 125.0311898072px;
}

@keyframes fade67 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 37%;
  }
}
.droplet:nth-child(68) {
  animation: fade68 3.09s ease-in infinite;
  bottom: 51.6283077853px;
  left: 224.2370427012px;
}

@keyframes fade68 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 46%;
  }
}
.droplet:nth-child(69) {
  animation: fade69 5.26s ease-in infinite;
  bottom: 65.7378400797px;
  left: 227.9304279102px;
}

@keyframes fade69 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 80%;
  }
}
.droplet:nth-child(70) {
  animation: fade70 7.83s ease-in infinite;
  bottom: 27.1333547732px;
  left: 157.4811088505px;
}

@keyframes fade70 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 32%;
  }
}
.droplet:nth-child(71) {
  animation: fade71 6.74s ease-in infinite;
  bottom: 48.8935494245px;
  left: 158.2917231823px;
}

@keyframes fade71 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 100%;
  }
}
.droplet:nth-child(72) {
  animation: fade72 7.62s ease-in infinite;
  bottom: 41.4034863694px;
  left: 143.7577974518px;
}

@keyframes fade72 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 68%;
  }
}
.droplet:nth-child(73) {
  animation: fade73 3.5s ease-in infinite;
  bottom: 33.4085607379px;
  left: 136.2924115859px;
}

@keyframes fade73 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 60%;
  }
}
.droplet:nth-child(74) {
  animation: fade74 6.3s ease-in infinite;
  bottom: 66.7870294183px;
  left: 162.2193815319px;
}

@keyframes fade74 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 27%;
  }
}
.droplet:nth-child(75) {
  animation: fade75 7.15s ease-in infinite;
  bottom: 60.1421636069px;
  left: 177.2754052051px;
}

@keyframes fade75 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 63%;
  }
}
.droplet:nth-child(76) {
  animation: fade76 3.49s ease-in infinite;
  bottom: 51.5740308592px;
  left: 158.3123431672px;
}

@keyframes fade76 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 27%;
  }
}
.droplet:nth-child(77) {
  animation: fade77 4.16s ease-in infinite;
  bottom: 40.6512914268px;
  left: 117.188422503px;
}

@keyframes fade77 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 63%;
  }
}
.droplet:nth-child(78) {
  animation: fade78 4.63s ease-in infinite;
  bottom: 36.9014953194px;
  left: 131.2733923554px;
}

@keyframes fade78 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 74%;
  }
}
.droplet:nth-child(79) {
  animation: fade79 7.83s ease-in infinite;
  bottom: 54.3964310204px;
  left: 44.1469561357px;
}

@keyframes fade79 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 31%;
  }
}
.droplet:nth-child(80) {
  animation: fade80 4.77s ease-in infinite;
  bottom: 37.483651083px;
  left: 219.4356419295px;
}

@keyframes fade80 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 37%;
  }
}
.droplet:nth-child(81) {
  animation: fade81 5.18s ease-in infinite;
  bottom: 52.1710770471px;
  left: 110.5299822739px;
}

@keyframes fade81 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 29%;
  }
}
.droplet:nth-child(82) {
  animation: fade82 4.97s ease-in infinite;
  bottom: 52.3881847518px;
  left: 186.1951750483px;
}

@keyframes fade82 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 27%;
  }
}
.droplet:nth-child(83) {
  animation: fade83 6.74s ease-in infinite;
  bottom: 52.0082462686px;
  left: 134.0078135169px;
}

@keyframes fade83 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 47%;
  }
}
.droplet:nth-child(84) {
  animation: fade84 4.96s ease-in infinite;
  bottom: 35.2473256601px;
  left: 49.0969186185px;
}

@keyframes fade84 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 94%;
  }
}
.droplet:nth-child(85) {
  animation: fade85 7.56s ease-in infinite;
  bottom: 34.8785088016px;
  left: 171.3839176808px;
}

@keyframes fade85 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 95%;
  }
}
.droplet:nth-child(86) {
  animation: fade86 3.41s ease-in infinite;
  bottom: 43.1227890955px;
  left: 182.6259469313px;
}

@keyframes fade86 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 94%;
  }
}
.droplet:nth-child(87) {
  animation: fade87 3.34s ease-in infinite;
  bottom: 51.1398154497px;
  left: 86.4120204124px;
}

@keyframes fade87 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 76%;
  }
}
.droplet:nth-child(88) {
  animation: fade88 5.67s ease-in infinite;
  bottom: 80.7762206003px;
  left: 68.5160022051px;
}

@keyframes fade88 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 55%;
  }
}
.droplet:nth-child(89) {
  animation: fade89 6.81s ease-in infinite;
  bottom: 30.0838896412px;
  left: 142.7974585982px;
}

@keyframes fade89 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 40%;
  }
}
.droplet:nth-child(90) {
  animation: fade90 3.86s ease-in infinite;
  bottom: 66.5057770097px;
  left: 124.3909639048px;
}

@keyframes fade90 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 79%;
  }
}
.droplet:nth-child(91) {
  animation: fade91 3.84s ease-in infinite;
  bottom: 39.5211962555px;
  left: 143.7577974518px;
}

@keyframes fade91 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 99%;
  }
}
.droplet:nth-child(92) {
  animation: fade92 6.87s ease-in infinite;
  bottom: 59.4427040478px;
  left: 200.2300388426px;
}

@keyframes fade92 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 50%;
  }
}
.droplet:nth-child(93) {
  animation: fade93 4.22s ease-in infinite;
  bottom: 16.4376658768px;
  left: 84.8889550331px;
}

@keyframes fade93 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 80%;
  }
}
.droplet:nth-child(94) {
  animation: fade94 7.74s ease-in infinite;
  bottom: 59.3856379075px;
  left: 171.1964750764px;
}

@keyframes fade94 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 69%;
  }
}
.droplet:nth-child(95) {
  animation: fade95 7.54s ease-in infinite;
  bottom: 53.3108924969px;
  left: 91.3619828953px;
}

@keyframes fade95 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 85%;
  }
}
.droplet:nth-child(96) {
  animation: fade96 7.99s ease-in infinite;
  bottom: 43.4451583567px;
  left: 43.0046571012px;
}

@keyframes fade96 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 82%;
  }
}
.droplet:nth-child(97) {
  animation: fade97 3.11s ease-in infinite;
  bottom: 29.3462559242px;
  left: 118.9490437346px;
}

@keyframes fade97 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 21%;
  }
}
.droplet:nth-child(98) {
  animation: fade98 7.08s ease-in infinite;
  bottom: 51.1940923759px;
  left: 151.0390428959px;
}

@keyframes fade98 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 90%;
  }
}
.droplet:nth-child(99) {
  animation: fade99 7.95s ease-in infinite;
  bottom: 24.6762242842px;
  left: 115.3066086229px;
}

@keyframes fade99 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 25%;
  }
}
.droplet:nth-child(100) {
  animation: fade100 7.35s ease-in infinite;
  bottom: 29.3462559242px;
  left: 165.2742269148px;
}

@keyframes fade100 {
  20% {
    opacity: 1;
  }
  90% {
    opacity: 0;
  }
  100% {
    bottom: 84%;
  }
}
@keyframes water {
  50% {
    height: 20vh;
  }
}

.water-intake--form {
    padding-top: 33rem;
}

.water-intake--form form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}
</style>