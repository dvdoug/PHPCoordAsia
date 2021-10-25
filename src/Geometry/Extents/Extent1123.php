<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Asia-ExFSU/Iran.
 * @internal
 */
class Extent1123
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [44.902216339112, 39.516690826416], [44.874708557129, 39.520539855957], [44.854574584961, 39.532350158692], [44.827772521973, 39.576646423341], [44.808042907715, 39.635827636719], [44.8030418396, 39.655545806885], [44.788595581055, 39.705819702149], [44.768465423584, 39.722348785401], [44.713539191731, 39.730737615223], [44.713041687012, 39.730813598633], [44.636717224121, 39.801801300049], [44.508463287354, 39.879155731202], [44.371084594727, 39.798867797852], [44.377890014649, 39.740655517578], [44.32582321167, 39.536443328858], [44.301100158692, 39.516515350342], [44.240270996094, 39.495545959473], [44.204523468018, 39.48729095459], [44.130918884278, 39.50845489502], [44.100958251953, 39.516938781739], [43.976862335205, 39.511655426026], [43.936380767822, 39.485475158692], [43.934954071045, 39.477445220947], [43.960546875, 39.452485656739], [43.974714660645, 39.436097717285], [44.116449737549, 39.236516571045], [44.098032379151, 39.156674957276], [44.062414550781, 39.105199432374], [44.073324584961, 39.068040466309], [44.10943069458, 38.993463134766], [44.150549316406, 38.965547180176], [44.18366470337, 38.962491607666], [44.200266265869, 38.942628479004], [44.203188323975, 38.909986114502], [44.161795043945, 38.824292755127], [44.20651473999, 38.747281646729], [44.217214965821, 38.71304473877], [44.221525573731, 38.609368896485], [44.211767578125, 38.569924926758], [44.204161071778, 38.549436187744], [44.20525970459, 38.500535583496], [44.218145751953, 38.482053375244], [44.336725616455, 38.494809722901], [44.382517242432, 38.441300964356], [44.373220825196, 38.416749572754], [44.299017333985, 38.31129989624], [44.223318481445, 38.197213745118], [44.138883972168, 38.060273742676], [44.12396850586, 37.999150848389], [44.19305267334, 37.973321533204], [44.476793670654, 37.866796112061], [44.517767333985, 37.817975616456], [44.498876953125, 37.790818786622], [44.484434509277, 37.713883972168], [44.488851928711, 37.543092346192], [44.512800598145, 37.534223175049], [44.548597717285, 37.527772521973], [44.701658630371, 37.421662902832], [44.718180084229, 37.397416687012], [44.720545196533, 37.368745422364], [44.692762756348, 37.274987792969], [44.687338256836, 37.249711608887], [44.666170501709, 37.212281799316], [44.68498840332, 37.184716796875], [44.717489624024, 37.15581665039], [44.756517791748, 37.152627563477], [44.803114318848, 37.130475616455], [44.809423828125, 37.020539855957], [44.805536651611, 36.992551422119], [44.782488250733, 36.970681762696], [44.744501495362, 36.921929931641], [44.753042602539, 36.894578552246], [44.770536804199, 36.884572601319], [44.797766113281, 36.882348632813], [44.839224243164, 36.88207397461], [44.925550842285, 36.836381530762], [44.965410614014, 36.783048248291], [44.962767028809, 36.739640808105], [44.938814544678, 36.714227294922], [44.915830993653, 36.657769775391], [44.913088226319, 36.64285812378], [44.95525970459, 36.606107330323], [44.983923339844, 36.55764541626], [44.986513519287, 36.535195922852], [45.006948852539, 36.51817855835], [45.03916015625, 36.508874511719], [45.065542602539, 36.511376953125], [45.093878173828, 36.51943359375], [45.116102600098, 36.528878784179], [45.143740081787, 36.528318023682], [45.179159545898, 36.481103515625], [45.219709777832, 36.338319396973], [45.24359741211, 36.233880615235], [45.254438781739, 36.164437866211], [45.313883209229, 36.095418548584], [45.372480773926, 36.116796112061], [45.41054763794, 36.117768859863], [45.420072937012, 36.111169433594], [45.524519348145, 36.066278076172], [45.563322448731, 36.040544128418], [45.582495117188, 36.021936035156], [45.618879699707, 35.979573822022], [45.632906341553, 35.953466033936], [45.639990234375, 35.932214355469], [45.657125854492, 35.917348480225], [45.767908477784, 35.917775726319], [45.788168334961, 35.931985473633], [45.989366912842, 35.965482330322], [46.03554763794, 35.947354888916], [46.047739410401, 35.924039459229], [46.072908782959, 35.907353973389], [46.100687408447, 35.902768707276], [46.158888244629, 35.913049316406], [46.190966033936, 35.931520080567], [46.223608398438, 35.932633972168], [46.245199584961, 35.914193725586], [46.234159851074, 35.877488708497], [46.168600463867, 35.828042602539], [46.129431152344, 35.812211608887], [46.051241302491, 35.794847106934], [46.010691070557, 35.792626953125], [45.972772979736, 35.796655273438], [45.934160614014, 35.789018249511], [45.879988098145, 35.684716796875], [45.890966796875, 35.58519897461], [45.95110168457, 35.499162292481], [45.964994812012, 35.483331298828], [46.048048400879, 35.397462463379], [46.033049011231, 35.372491455079], [46.06019821167, 35.334157562256], [46.086603546143, 35.321717834472], [46.066007995606, 35.208516693115], [45.935755157471, 35.159226989746], [45.892065429688, 35.175233459472], [45.849821472168, 35.193269348145], [45.777769470215, 35.132493591309], [45.780546569824, 35.098878479004], [45.792353057861, 35.073041534424], [45.767767333984, 35.003602600098], [45.748743438721, 34.996938323975], [45.697733306885, 35.014039611817], [45.665056610107, 34.94627532959], [45.638327026367, 34.930970764161], [45.612631225586, 34.929578399658], [45.591101074219, 34.916520690918], [45.551657104492, 34.835198974609], [45.559641265869, 34.815339660645], [45.584017181397, 34.799298858643], [45.60832824707, 34.759156799317], [45.629572296143, 34.685617065429], [45.614668273926, 34.657605743408], [45.548468017578, 34.673471069336], [45.462923431397, 34.68610534668], [45.338632965088, 34.557836151123], [45.360548400879, 34.47845993042], [45.39235534668, 34.43512878418], [45.419855499268, 34.447351074219], [45.449438476563, 34.445546722413], [45.473329925537, 34.424024200439], [45.484167480469, 34.40126953125], [45.466520690918, 34.251309967041], [45.447252655029, 34.23419342041], [45.367212677002, 34.177079772949], [45.303606414795, 34.075200653076], [45.323740386963, 34.051103210449], [45.346796417236, 34.042489624023], [45.372602844238, 34.040532684327], [45.400133514404, 34.045888519287], [45.450270080567, 33.988603210449], [45.541056060791, 33.867387390137], [45.547380828857, 33.835061645508], [45.596727752686, 33.769437408447], [45.652326965332, 33.737283325195], [45.651693725586, 33.695024108887], [45.686087036133, 33.700490570069], [45.715063476563, 33.722417449952], [45.798880004883, 33.733049011231], [45.844778442383, 33.65436706543], [45.790670776367, 33.621617889405], [45.774225616455, 33.599786376953], [45.830549621582, 33.582765197754], [45.851934814453, 33.579713439942], [45.906469726563, 33.585778808594], [45.929159545899, 33.560548400879], [45.944227600098, 33.537351226807], [45.948885345459, 33.50637588501], [45.949160003662, 33.483602142334], [46.026937866211, 33.403604125977], [46.077146911621, 33.364785766602], [46.099016571045, 33.293462371826], [46.088320159912, 33.275407409668], [46.045133972168, 33.235829925538], [46.013052368164, 33.183053588867], [45.997019195557, 33.10297164917], [46.006414794922, 33.07106552124], [46.051657104492, 33.052632904053], [46.078329467774, 33.053323364258], [46.103880310059, 33.059159851075], [46.144995117188, 33.065270996094], [46.175409698486, 33.066796875], [46.204710388184, 33.063607788085], [46.273321533203, 33.051385498047], [46.314989471436, 33.040406799317], [46.350828552246, 33.025270080566], [46.393602752686, 33.002488708497], [46.457525634766, 32.95786819458], [46.553877258301, 32.898881530762], [46.595823669434, 32.878877258301], [46.617765808106, 32.869439697266], [46.647489929199, 32.853051757813], [46.740270996094, 32.780274963379], [46.757215881348, 32.766938781739], [46.782076263428, 32.743188476563], [46.8033203125, 32.723046875], [46.833601379395, 32.700547790528], [46.856100463867, 32.684716796875], [46.954435729981, 32.615830993653], [46.971937561035, 32.604440307617], [47.03277053833, 32.565824127198], [47.051378631592, 32.558465576172], [47.098875427246, 32.562211608887], [47.148859405518, 32.573495483399], [47.170965576172, 32.588601684571], [47.261240386963, 32.573808288575], [47.33790435791, 32.485551452637], [47.316084289551, 32.449452972413], [47.429434204102, 32.296937561035], [47.502684020996, 32.000593566895], [47.533190155029, 31.953184509278], [47.637495422363, 31.836660766602], [47.68694152832, 31.789163970947], [47.749159240723, 31.719717407227], [47.764440917969, 31.698606872559], [47.733328247071, 31.627771759033], [47.701101684571, 31.553049468994], [47.648603820801, 31.430277252198], [47.616659545898, 31.355551147461], [47.597212219239, 31.307772064209], [47.596380615235, 31.204443359375], [47.596380615235, 31.135431671143], [47.595823669434, 31.121660614014], [47.595541381836, 31.094160461426], [47.594709777832, 31.011385345459], [47.593878173828, 30.901110076905], [47.743322753906, 30.899717712402], [47.823881530762, 30.899439239502], [47.93666305542, 30.896105194092], [47.936659240723, 30.846384429932], [47.934439086914, 30.556940460205], [47.933050537109, 30.488050842285], [47.932493591309, 30.391382598877], [47.967516326904, 30.363788986206], [48.00754776001, 30.354322814942], [48.041380310059, 30.339994812011], [48.060430908203, 30.327082061768], [48.189436340332, 30.229719543457], [48.31194152832, 30.099672698975], [48.310129547119, 30.069994354248], [48.311102294922, 30.003607177735], [48.350130462647, 29.90541305542], [48.37338104248, 29.882900619507], [48.445555114746, 29.86302986145], [48.505895545, 29.820691144001], [48.511503545, 29.810517144], [48.512090545, 29.809264144], [48.515857545, 29.803547144], [48.524913545, 29.787685144001], [48.534417545, 29.771251144001], [48.556838545, 29.731531144], [48.620431545, 29.577989143], [48.649148545, 29.509146143001], [48.663725545, 29.494983143], [48.671286545, 29.492239143], [48.737479545, 29.468220143], [48.832098546, 29.434228143], [49.046388546, 29.304191143001], [49.107299546, 29.267258143001], [49.118206546, 29.251229143001], [49.264439546, 29.039251143001], [49.320334546, 28.958226143001], [49.406367546, 28.897326143], [49.424879546, 28.835000143], [49.429631546, 28.809422143], [49.434093546, 28.780739143], [49.439830546001, 28.748868143001], [49.455540546, 28.670971143], [49.471666546, 28.588333143001], [49.458333546, 28.581667143], [49.503333546, 28.520000142001], [49.561666546, 28.480000142001], [49.599999546, 28.365000142001], [49.689999546, 28.306667142], [49.696666546, 28.311667142], [49.748333546, 28.250000142], [49.836666547001, 28.193333142], [49.978802547, 28.067757142], [49.914743547, 28.029933142001], [49.914067547, 28.029039142], [49.913545547001, 28.028730142], [49.909775547, 28.023741142], [49.904897547, 28.020654142001], [49.904298547001, 28.020053142001], [49.903699547, 28.019451142], [49.864545547, 27.963823142001], [49.847600547, 27.894585142], [49.847552547, 27.893336142], [49.847503547, 27.892086142001], [49.847997547, 27.889690142001], [49.847600547, 27.887912142], [49.847466547, 27.887311142], [49.847698547, 27.886291142], [49.847368547, 27.884812142001], [49.864746547, 27.808355142001], [49.883928547001, 27.781294142001], [49.883923547, 27.781287142], [49.940161547, 27.781184142], [49.942268547, 27.781189142001], [50.033435547, 27.780935142], [50.076649547, 27.781205142001], [50.181419547, 27.780488142001], [50.211104547, 27.780327142], [50.268984547, 27.779908142], [50.268984547, 27.779537142001], [50.283375547, 27.757676142001], [50.285951547, 27.754254142], [50.286118547, 27.753508142001], [50.286132547, 27.753486142001], [50.286746547, 27.752553142], [50.303793547, 27.676041142], [50.302636547, 27.670943142], [50.409651547, 27.5063051415], [50.516666547, 27.341667141], [50.658333547001, 27.208333141], [50.799999547, 27.066667141001], [50.849999547, 27.008333141001], [50.998332548, 26.946111141001], [51.021801548, 26.943114141001], [51.283332548, 26.909722141001], [51.634721548, 26.838889141001], [51.8687495485, 26.647916641], [52.102777549, 26.456944141], [52.355555049, 26.2312501405], [52.608332549, 26.00555614], [52.771527049, 25.71805614], [52.934721549, 25.43055614], [52.977739549, 25.398996140001], [53.022499549, 25.38367514], [53.079355550001, 25.372953140001], [53.08918055, 25.37134514], [53.204003550001, 25.37024614], [53.411652550001, 25.378071140001], [53.47964355, 25.39442714], [53.52449755, 25.411414140001], [53.66702755, 25.46033614], [53.83384355, 25.52313314], [53.86487255, 25.525917140001], [53.98777755, 25.536944140001], [54.538332551, 25.56527814], [54.606943551, 25.59305614], [54.614747551, 25.592772140001], [54.653260551, 25.58973514], [54.691775551, 25.592761140001], [54.729126551, 25.601757140001], [54.730225551, 25.60221814], [54.731625551, 25.602555140001], [54.766684551, 25.61725014], [54.798388551001, 25.637200140001], [54.825776551, 25.66180114], [54.825863551, 25.661912140001], [54.827073551, 25.66299914], [54.847221551, 25.688889140001], [54.851943551, 25.69166714], [54.871148551, 25.696918140001], [54.894159551, 25.706429140001], [54.986823551001, 25.744462140001], [55.013342551, 25.76166314], [55.036316551, 25.77704314], [55.175248551001, 25.87062714], [55.200963551001, 25.88793414], [55.206816551001, 25.88925614], [55.384296551, 25.928784140001], [55.394952551001, 25.93169614], [55.508977552, 25.962625140001], [55.525297552, 25.96736614], [55.586572552001, 25.99761414], [55.636724552001, 26.020840140001], [55.652760552, 26.026817140001], [55.669975552, 26.03170814], [55.711561552001, 26.06185514], [55.715659552, 26.06554014], [55.727919552, 26.07680814], [55.783920552, 26.118966140001], [55.819928552, 26.14248114], [55.857958552, 26.163764140001], [55.895833552, 26.176389140001], [55.970833552, 26.21388914], [56.212499552, 26.377778140001], [56.243055552001, 26.41805514], [56.273611552, 26.447222141], [56.341666552, 26.490278141], [56.374999552001, 26.493055141], [56.427777552, 26.516667141001], [56.649999553001, 26.604167141001], [56.783333553, 26.637500141001], [56.833333553, 26.593055141001], [56.854166553, 26.561111141001], [56.895833553001, 26.487500141], [56.891666553, 26.320833140001], [56.901388553, 26.26666714], [56.897222553001, 26.17500014], [56.899999553, 26.093055140001], [56.937499553, 25.95138914], [56.930555553001, 25.86805514], [56.955814553, 25.67482214], [56.940910553, 25.55674414], [56.943129553001, 25.54064614], [56.967847553, 25.46834214], [57.010160553001, 25.347542139], [57.030620553, 25.305900139001], [57.031046553, 25.305056139001], [57.119133553, 25.163520139], [57.134288553, 25.140347139], [57.146734553, 25.120941139001], [57.180325553, 25.069267139001], [57.191810553, 25.051513139], [57.195907553001, 25.046521139], [57.208153553, 25.032335139001], [57.210508553, 25.029924139001], [57.225489553001, 25.014681139], [57.225643553001, 25.014525139001], [57.225876553001, 25.014349139001], [57.241025553, 25.002968139], [57.262196553, 24.987543139], [57.263093553, 24.986891139], [57.277292553, 24.976677139], [57.286845553, 24.969675139001], [57.295412553, 24.963410139001], [57.372156553001, 24.899132139001], [57.379812553, 24.892736139], [57.380160553, 24.892296139001], [57.388162553, 24.886636139], [57.441967553, 24.848524139001], [57.584850554001, 24.747638139], [57.611762554001, 24.729560139], [57.681168554, 24.685205139], [57.768075554, 24.637609139], [57.792775554, 24.628968139], [57.797530554001, 24.627312139], [57.806531554, 24.625786139001], [57.816785554, 24.622170139001], [57.825012554001, 24.619248139], [58.184187554, 24.608889139], [58.199392554, 24.608314139], [58.250010554, 24.606566139], [58.311154554, 24.604085139], [58.382916554, 24.602776139001], [58.487810554, 24.600462139001], [58.531156554, 24.600678139001], [58.578992554, 24.593902139001], [58.599078554, 24.589015139001], [58.867378555, 24.458897139], [59.189533555, 24.369963139], [59.244703555, 24.354629139], [59.424841555, 24.302613139001], [59.448042555, 24.290378139], [59.458802555, 24.284629139001], [59.632020555, 24.219777138001], [59.8136915555, 24.126778638001], [59.995362556, 24.033780138001], [60.001830556, 24.030410138], [60.061850556, 24.005740138001], [60.214602556, 23.923688138001], [60.333502556, 23.844976138001], [60.380924556, 23.816655138], [60.521147556, 23.751519138], [60.550374556, 23.745509138001], [60.556786556, 23.742636138], [60.855839557, 23.608011138001], [60.888027557, 23.593392138001], [60.966768557, 23.556145138001], [61.065252557, 23.502880138], [61.290959557, 23.374773638001], [61.516666557, 23.246667138001], [61.574960223667, 23.572275471334], [61.633253890334, 23.897883804667], [61.691547557, 24.223492138], [61.691575557, 24.46435647117], [61.691575557, 24.705220805153], [61.691575557, 24.946085139001], [61.691581557, 25.079550139], [61.711030578613, 25.097647094727], [61.743608093262, 25.198332214356], [61.749162292481, 25.248052978516], [61.751931762695, 25.290274047852], [61.759713745117, 25.406385803223], [61.765542602539, 25.490553283692], [61.787629699707, 25.697498703003], [61.818048095703, 25.700691604615], [61.861936187744, 25.707807922364], [61.879991149903, 25.743887329102], [61.881936645508, 25.769995117188], [61.894158935547, 25.858328247071], [61.916940307617, 26.00860824585], [61.93277130127, 26.079439544678], [61.94415435791, 26.111662292481], [61.95485458374, 26.130550765991], [61.970964050293, 26.144022369385], [62.160821533203, 26.211664581299], [62.181108093262, 26.214163208008], [62.203881835938, 26.214441680908], [62.2389503479, 26.279545211792], [62.282769775391, 26.271109008789], [62.329160308838, 26.260136032105], [62.374890899658, 26.256599807739], [62.388604736328, 26.279022598267], [62.372560119629, 26.320412063599], [62.415273284912, 26.409025573731], [62.537908172608, 26.466524505615], [62.608605957032, 26.474440002442], [62.646661376953, 26.477220916748], [62.700830078125, 26.480276489258], [62.803880310059, 26.50221862793], [62.845651245117, 26.518885040283], [62.870267486572, 26.548746490479], [62.929162597656, 26.551107788086], [63.073602294922, 26.547773742676], [63.115830993653, 26.543608093262], [63.159574127197, 26.535551452637], [63.263604736328, 26.530550384522], [63.285127258301, 26.539162063599], [63.316102600098, 26.753885650635], [63.358190155029, 26.840412521363], [63.353051757813, 26.951387786866], [63.352635955811, 26.980551147461], [63.376519775391, 27.020552062989], [63.428811645508, 27.027981185913], [63.430272674561, 27.04888381958], [63.384854888916, 27.122215652466], [63.301934814453, 27.167637252808], [63.139161682129, 27.141382598877], [63.098603820801, 27.13027420044], [63.035894012451, 27.114715957642], [62.914853668213, 27.134994888306], [62.880269622803, 27.166803741456], [62.900552368164, 27.284441375733], [62.928880310059, 27.347216033936], [62.939714050293, 27.374437713623], [62.92332611084, 27.639715576172], [62.921937561035, 27.660276794434], [62.915544128418, 27.686941528321], [62.902490234375, 27.734995269776], [62.872491455078, 27.845274353028], [62.864999389648, 27.872770690918], [62.859162902832, 27.895273590088], [62.869157409668, 27.976107025146], [62.883332824707, 28.071939849854], [62.888887023926, 28.112493896485], [62.882215118408, 28.163748168946], [62.786935424805, 28.150274658203], [62.732907867432, 28.140272521973], [62.692491149903, 28.133604431153], [62.630822753906, 28.194998168946], [62.589089965821, 28.255621337891], [62.499852752686, 28.319439315796], [62.41665802002, 28.338882827759], [62.308602905274, 28.359438323975], [62.045960998535, 28.431803131104], [62.024995422363, 28.441246414185], [62.005548095703, 28.454996490479], [61.921937561035, 28.526106262207], [61.751382446289, 28.685274505616], [61.737214660645, 28.706385040283], [61.68277130127, 28.809439086914], [61.647622680664, 28.884535217286], [61.611940002442, 28.971109771729], [61.528047180176, 29.051384353638], [61.460275268555, 29.165830993653], [61.453466033936, 29.191524887085], [61.414437866211, 29.295828247071], [61.382493591309, 29.334162139893], [61.141522979737, 29.58346786499], [60.966302490235, 29.763655090332], [60.971654510498, 29.766939544678], [61.010820007325, 29.807218933106], [61.141938781738, 29.943609619141], [61.280274963379, 30.085829162598], [61.316659545898, 30.122770690918], [61.377488708496, 30.184442901611], [61.472215270996, 30.281664276123], [61.665273284912, 30.485969924927], [61.858331298828, 30.69027557373], [61.950131988526, 30.923885726929], [61.911103820801, 31.07721939087], [61.888330078125, 31.1172164917], [61.866803741455, 31.156183624268], [61.871102905274, 31.218328857422], [61.840829467774, 31.253328704834], [61.813607788086, 31.283331298828], [61.55051574707, 31.318197631836], [61.288598632813, 31.352217102051], [61.204164123535, 31.363050842285], [60.948812103272, 31.396105194092], [60.911378479004, 31.559717559814], [60.924165344238, 31.674440765382], [60.923467254639, 31.848467254639], [60.906938171387, 31.896662139893], [60.914437866211, 31.919439697266], [60.936654663086, 31.990270996094], [60.954995727539, 32.290544128418], [60.958329772949, 32.325963592529], [60.951799011231, 32.361104583741], [60.93277130127, 32.421937561036], [60.826379394531, 32.723878479005], [60.759713745117, 32.918603515625], [60.695825195313, 33.113610839844], [60.687913513184, 33.14313659668], [60.682496643066, 33.166101074219], [60.680551147461, 33.188600158691], [60.68325958252, 33.249574279785], [60.731378173828, 33.307496643067], [60.823876953125, 33.408883666992], [60.856942749023, 33.444993591309], [60.903321838379, 33.490830993653], [60.952699279785, 33.584226226807], [60.977559661865, 33.600759124756], [61.029824829102, 33.604951477051], [61.038877105713, 33.617040252686], [61.015546417237, 33.647912597656], [60.994020080567, 33.655824279785], [60.955827331543, 33.658883666992], [60.887773132324, 33.661656951904], [60.808969116211, 33.660482025147], [60.76609954834, 33.667497253418], [60.697213745117, 33.697488403321], [60.670549011231, 33.711106872559], [60.646104431152, 33.725267028809], [60.630826568604, 33.739991760254], [60.620267486573, 33.760686492921], [60.613328552246, 33.789712524415], [60.608686065674, 33.8399559021], [60.640550231934, 33.87693939209], [60.651658630371, 33.897214508056], [60.653592681885, 33.921872711182], [60.629159545899, 34.061380004883], [60.619989013672, 34.110551452637], [60.609178161621, 34.160108184815], [60.604165649414, 34.191659545898], [60.604440307617, 34.222215270996], [60.610971069336, 34.24554977417], [60.626100158692, 34.269441223145], [60.646104431153, 34.296380615234], [60.775128936768, 34.414018249512], [60.839295959473, 34.419995880127], [60.866662597656, 34.422219848633], [60.936101531983, 34.422631835938], [60.978875732422, 34.419717407227], [60.983605957032, 34.455270385742], [60.89825592041, 34.563321685791], [60.867772674561, 34.577977752686], [60.823876953125, 34.627912139892], [60.839990234375, 34.644715881348], [60.879159545899, 34.656098937989], [60.932908630371, 34.661794281006], [60.953191375733, 34.667630767823], [61.076654052735, 34.750756835938], [61.15110168457, 34.889436340332], [61.177491760254, 34.979432678223], [61.215547180176, 35.11693725586], [61.231660461426, 35.185823059082], [61.23603591919, 35.23207244873], [61.21637878418, 35.263875579834], [61.199781036377, 35.276589965821], [61.196240997315, 35.336240386963], [61.205827331543, 35.381799316406], [61.283601379395, 35.448602294922], [61.376519775391, 35.617635345459], [61.387910461426, 35.655618286133], [61.376557922363, 35.707246398926], [61.353608703613, 35.732766723633], [61.333184814453, 35.762631988526], [61.330472564697, 35.792279815674], [61.362077331543, 35.916520690918], [61.337075805664, 35.991380310058], [61.325822448731, 36.003877258301], [61.311662292481, 36.037492370606], [61.301103210449, 36.169160461426], [61.316934204102, 36.208604431153], [61.321374511719, 36.239991760254], [61.320821380616, 36.27887878418], [61.284432983398, 36.386659240723], [61.262631988525, 36.519712066651], [61.289502716065, 36.668950653077], [61.266664123535, 36.732209777832], [61.253739929199, 36.750409698486], [61.172769165039, 36.750543212891], [61.034432983399, 36.749719238282], [60.89638671875, 36.748880004883], [60.766938781739, 36.747491455078], [60.740830993652, 36.747216796875], [60.60277709961, 36.746102905274], [60.464715576172, 36.745545959473], [60.431245422364, 36.758042907715], [60.257493591309, 36.971101379395], [60.241380310059, 36.991662597656], [60.206101989746, 37.036935424805], [60.191796875, 37.058606719971], [60.17638168335, 37.088880157471], [60.163465118408, 37.111661529541], [60.115827178955, 37.143815612793], [59.913049316406, 37.224710083008], [59.815545654297, 37.247216796875], [59.646104431153, 37.308328247071], [59.579988098145, 37.332765197754], [59.493051147461, 37.423051452637], [59.487214660645, 37.443605041504], [59.471936798096, 37.504155731201], [59.470544433594, 37.524713134766], [59.47589263916, 37.571309661866], [59.475545501709, 37.595964050293], [59.443048095703, 37.635549163819], [59.415685272217, 37.640828704834], [59.393468475342, 37.635968780518], [59.359857177734, 37.617147064209], [59.33804473877, 37.618051147461], [59.302217102051, 37.63305053711], [59.233880615235, 37.67666015625], [59.181665039063, 37.711938476563], [59.152772521973, 37.731378173828], [59.080819702148, 37.754708862305], [59.033601379395, 37.768601989747], [58.906308746338, 37.770967102051], [58.819432830811, 37.749715423584], [58.774713134766, 37.753114318848], [58.746385192871, 37.761659240723], [58.592492675781, 37.74554977417], [58.570684051514, 37.740270233155], [58.507211303711, 37.741105651856], [58.333737945557, 37.778672790528], [58.320962524414, 37.798810577393], [58.324433898926, 37.821240997315], [58.297769165039, 37.886247253418], [58.274438476563, 37.89638671875], [58.03704032898, 37.961417770386], [57.799642181397, 38.026448822022], [57.714440917969, 38.025270080567], [57.628602600098, 38.027215576172], [57.554021453858, 38.038461303711], [57.478875732422, 38.074708557129], [57.451661682129, 38.093251800537], [57.470822906494, 38.169995880127], [57.472074127197, 38.190545654297], [57.341519927979, 38.372354125977], [57.308461761475, 38.382634735108], [57.28249130249, 38.381803131104], [57.258882141113, 38.37027130127], [57.249787902832, 38.360093688966], [57.236867523193, 38.339784240723], [57.162629699707, 38.295407867432], [57.042489624024, 38.311380004883], [56.966706848145, 38.325608825684], [56.939576721192, 38.334043121338], [56.89602432251, 38.35281906128], [56.873880004883, 38.36693725586], [56.855744934082, 38.386262512207], [56.795266723633, 38.36693725586], [56.669717407227, 38.359021759033], [56.64277420044, 38.366105651856], [56.571099853516, 38.363053894043], [56.542764282227, 38.359994506836], [56.519296264649, 38.352075195313], [56.485551452637, 38.331376647949], [56.467210388184, 38.31859741211], [56.422978973389, 38.282834625244], [56.426728820801, 38.262696838379], [56.449647521973, 38.236032104492], [56.431798553467, 38.186933135986], [56.319703674317, 38.171205139161], [56.268743133545, 38.194715118408], [56.209992980957, 38.186654663086], [56.17707977295, 38.180410003662], [56.143190002442, 38.174996948242], [56.087071990967, 38.172494506836], [55.968328094483, 38.193879699707], [55.934712982178, 38.206658935547], [55.906381225586, 38.222489929199], [55.863885498047, 38.224160766602], [55.833322143555, 38.220685577393], [55.79165802002, 38.211381530762], [55.770272827149, 38.20888671875], [55.656655883789, 38.198327636719], [55.569436645508, 38.190827941895], [55.537629699707, 38.183328247071], [55.514154052735, 38.167771911621], [55.494439697266, 38.148606872559], [55.476522064209, 38.138467407227], [55.329431152344, 38.08193359375], [55.279435729981, 38.064714050294], [55.240064239502, 38.054921722412], [55.170411682129, 38.005822753906], [55.154161071778, 37.987214660645], [55.137773132325, 37.965825653076], [55.054711914063, 37.904992675782], [55.019990539551, 37.884164428711], [54.990274047852, 37.874993896485], [54.963327026367, 37.866662597657], [54.933053588867, 37.846383666992], [54.909715270996, 37.81110534668], [54.88186416626, 37.743047332764], [54.893537139893, 37.723947143555], [54.908876037598, 37.677907562256], [54.880689239502, 37.61388168335], [54.856385803223, 37.595544433594], [54.768743133545, 37.540128326416], [54.730546569824, 37.540269470215], [54.704713439942, 37.54832611084], [54.680131530762, 37.552907562256], [54.645825958252, 37.544156646729], [54.612771606446, 37.530549621582], [54.582208251953, 37.514154052735], [54.524713134766, 37.486108398438], [54.505685424805, 37.477906799316], [54.456101989746, 37.460824584961], [54.10166015625, 37.430276489258], [53.805639648438, 37.450852966309], [53.451489122912, 37.529298727036], [53.097338597386, 37.607744487763], [52.74318807186, 37.686190248489], [52.389037546334, 37.764636009216], [52.034887020808, 37.843081769943], [51.680736495282, 37.921527530669], [51.326585969756, 37.999973291396], [50.963971227774, 38.07746363558], [50.601356485791, 38.154953979764], [50.238741743809, 38.232444323948], [49.876127001826, 38.309934668132], [49.513512259844, 38.387425012316], [49.150897517861, 38.4649153565], [48.788282775879, 38.542405700684], [48.741171264649, 38.550477600098], [48.683737182617, 38.545537567139], [48.642210388184, 38.52416381836], [48.562902832032, 38.489152526856], [48.523508453369, 38.496503448487], [48.499151611328, 38.516938781739], [48.465265655518, 38.571378326416], [48.332765960693, 38.724568939209], [48.298738861084, 38.720540618896], [48.261930847168, 38.705819702149], [48.231653594971, 38.702836608887], [48.143598937989, 38.772069549561], [48.146898651123, 38.815400695801], [48.084707641602, 38.850541687012], [48.049295806885, 38.861104583741], [48.023603820801, 38.872216796875], [48.003042602539, 38.883599853516], [47.924639129639, 38.933389282227], [47.913187408447, 38.96304473877], [47.912069702149, 38.997071838379], [47.976793670654, 39.053880310059], [48.044149780274, 39.068322753906], [48.085264587402, 39.069146728516], [48.124708557129, 39.071374511719], [48.163717651367, 39.077596282959], [48.183737182617, 39.085820770264], [48.208738708496, 39.103742218018], [48.22540512085, 39.132211303711], [48.226930999756, 39.154435729981], [48.193876647949, 39.212487792969], [48.172350311279, 39.226514434815], [48.129225158692, 39.239919281006], [48.033323669434, 39.310964202881], [48.021719360352, 39.351796722413], [48.023874664307, 39.378182983399], [48.048944854736, 39.406793212891], [48.098532104492, 39.436097717285], [48.14596786499, 39.442483520508], [48.178869628906, 39.45026550293], [48.257883453369, 39.489907836915], [48.2405418396, 39.523458099365], [48.221937561035, 39.540818786621], [48.183874511719, 39.572755432129], [48.150831604004, 39.59471282959], [48.112493896484, 39.626374816895], [48.059156799316, 39.673318481446], [47.982492828369, 39.746240234375], [47.963320159912, 39.765550231934], [47.938322448731, 39.783326721192], [47.914152526856, 39.799157714844], [47.884710693359, 39.81558380127], [47.71290435791, 39.779161071778], [47.693884277344, 39.76679763794], [47.66985168457, 39.733735656739], [47.442495727539, 39.615266418457], [47.360678100586, 39.598191833496], [47.291662597656, 39.570542907716], [47.237215423584, 39.524297332764], [47.218607330322, 39.497487640381], [47.186937713623, 39.474435424805], [47.099504852295, 39.439988708496], [47.064573669434, 39.435273742676], [46.999708557129, 39.404435729981], [46.943464660645, 39.337903594971], [46.933878326416, 39.296723937989], [46.852896118164, 39.256372070313], [46.808737182617, 39.267907714844], [46.774702453614, 39.267495727539], [46.748880767822, 39.260614013672], [46.658949279785, 39.185964202881], [46.645471954346, 39.15103302002], [46.552206420899, 39.076928710938], [46.472494506836, 39.015824890137], [46.440374755859, 38.975587463379], [46.416387939453, 38.978036499024], [46.351934814453, 38.989991760254], [46.27638092041, 39.006936645508], [46.251093292237, 39.009980773926], [46.194715881348, 38.995820617676], [46.168604278564, 38.982347106934], [46.144995117188, 38.966794586182], [46.095533752441, 38.944146728516], [46.078245544434, 38.941148376465], [45.974714660644, 38.971932983399], [45.850828552246, 38.987214660645], [45.741102600098, 39.003602600098], [45.507490539551, 39.051377868652], [45.438604736328, 39.065545654297], [45.418592834473, 39.070542907715], [45.377264404297, 39.084962463379], [45.333475494385, 39.103185272217], [45.324434661865, 39.122766113282], [45.321096801758, 39.160821533203], [45.245542907715, 39.264707183838], [45.198389434815, 39.297624206543], [45.171240234375, 39.287202453614], [45.125814819336, 39.294984436036], [45.043531799317, 39.316857910157], [45.041796112061, 39.347074127197], [45.030546569824, 39.385552978516], [45.015821838379, 39.412202453614], [44.963041687012, 39.473046875], [44.902216339112, 39.516690826416],
                ],
            ],
        ];
    }
}
