<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Asia-ExFSU/Iraq - 42°E to 48°E.
 * @internal
 */
class Extent3388
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [42, 31.146143140343], [42.084999084473, 31.111660003662], [42.364899953206, 30.913159688314], [42.64480082194, 30.714659372965], [42.924701690674, 30.516159057617], [43.064998626709, 30.416660308838], [43.31345876058, 30.233940124512], [43.56191889445, 30.051219940186], [43.81037902832, 29.86849975586], [44.114139556885, 29.645109812419], [44.417900085449, 29.421719868978], [44.721660614014, 29.198329925537], [45.071783065796, 29.170264720917], [45.421905517578, 29.142199516296], [45.772027969361, 29.114134311676], [46.122150421143, 29.086069107056], [46.426670074463, 29.061660766602], [46.546943664551, 29.104198455811], [46.547355651855, 29.105201721192], [46.558185577393, 29.121452331543], [46.581657409668, 29.143329620361], [46.59888458252, 29.156108856201], [46.635276794434, 29.178607940674], [46.653839111328, 29.188482284546], [46.690383911133, 29.23034286499], [46.714912414551, 29.266315460205], [46.775550842285, 29.356384277344], [46.827766418457, 29.433605194092], [46.85888671875, 29.475826263428], [46.924022674561, 29.554718017578], [46.94429397583, 29.578468322754], [46.981376647949, 29.646110534668], [47.04776763916, 29.794162750244], [47.094432830811, 29.907077789307], [47.11360168457, 29.946384429932], [47.128875732422, 29.974716186523], [47.147766113281, 29.996524810791], [47.169990539551, 30.015270233154], [47.204296112061, 30.033330917358], [47.351104736328, 30.081661224365], [47.396659851074, 30.08277130127], [47.436660766602, 30.083053588867], [47.723461151123, 30.084159851074], [47.934989929199, 30.017774581909], [47.943473815918, 30.017555236816], [47.952751545001, 30.013988674421], [47.952751545001, 30.013220144], [47.953578545, 30.012421144], [47.953578545, 30.009889144], [47.954471545, 30.009060144], [47.954464545, 30.008837144], [47.955314545, 30.008508144], [47.956144545001, 30.007100144], [47.957416545, 30.005593144001], [47.957754545, 30.004728144], [47.960711545, 30.002043144001], [47.961941545001, 30.001139144], [47.962329545, 30.001169144001], [47.962779545, 30.000749144001], [47.962657545, 30.000627144], [47.963970545, 29.999997144001], [47.966692545, 29.998418144], [47.968719545, 29.997551144], [47.970833545, 29.996807144], [47.973320545, 29.996083144001], [47.976306545, 29.995556144], [47.977022545, 29.995452144001], [47.982498545, 29.995470144], [47.983183545, 29.994735144], [47.983788545, 29.994670144], [47.984187545, 29.994579144], [47.986640545, 29.994579144], [47.987163545, 29.994075144], [47.987673545, 29.993996144001], [47.989522545, 29.993760144], [47.989940545, 29.993749144001], [47.989992545, 29.993700144001], [47.990575545, 29.993625144001], [47.991378545, 29.993272144], [47.992713545, 29.992941144], [47.995861545, 29.992941144], [47.996673545, 29.992125144], [47.996762545, 29.992108144], [47.998329545, 29.992081144001], [47.998507545001, 29.991904144], [47.998677545, 29.991899144], [48, 29.991740730134], [48, 30], [48, 30.166666666667], [48, 30.333333333333], [48, 30.5], [48, 30.666666666667], [48, 30.997189026679], [47.923881530762, 30.999439239502], [47.843322753906, 30.999717712402], [47.693878173828, 31.001110076904], [47.694709777832, 31.111385345459], [47.695541381836, 31.194160461426], [47.695823669434, 31.221660614014], [47.696380615235, 31.235431671143], [47.696380615235, 31.304443359375], [47.697212219238, 31.407772064209], [47.716659545899, 31.455551147461], [47.748603820801, 31.530277252197], [47.801101684571, 31.653049468994], [47.833328247071, 31.727771759033], [47.864440917969, 31.798606872559], [47.849159240723, 31.819717407227], [47.78694152832, 31.889163970947], [47.737495422363, 31.936660766602], [47.633190155029, 32.053184509278], [47.602684020996, 32.100593566894], [47.529434204102, 32.196937561035], [47.416084289551, 32.349452972412], [47.43790435791, 32.385551452637], [47.361240386963, 32.473808288574], [47.270965576172, 32.48860168457], [47.248859405518, 32.473495483399], [47.198875427246, 32.462211608887], [47.151378631592, 32.458465576172], [47.13277053833, 32.465824127197], [47.071937561035, 32.504440307617], [47.054435729981, 32.515830993652], [46.956100463867, 32.584716796875], [46.933601379395, 32.600547790528], [46.9033203125, 32.623046875], [46.882076263428, 32.643188476563], [46.857215881348, 32.666938781738], [46.840270996094, 32.680274963379], [46.747489929199, 32.753051757813], [46.717765808106, 32.769439697265], [46.695823669434, 32.778877258301], [46.653877258301, 32.798881530762], [46.557525634766, 32.85786819458], [46.493602752686, 32.902488708496], [46.450828552246, 32.925270080566], [46.414989471436, 32.940406799317], [46.373321533203, 32.951385498047], [46.304710388184, 32.963607788086], [46.275409698486, 32.966796875], [46.244995117188, 32.965270996094], [46.203880310059, 32.959159851074], [46.178329467774, 32.953323364258], [46.151657104492, 32.952632904053], [46.106414794922, 32.97106552124], [46.097019195557, 33.00297164917], [46.113052368164, 33.083053588867], [46.145133972168, 33.135829925537], [46.188320159912, 33.175407409668], [46.199016571045, 33.193462371826], [46.177146911621, 33.264785766602], [46.126937866211, 33.303604125977], [46.049160003662, 33.383602142334], [46.048885345459, 33.40637588501], [46.044227600098, 33.437351226807], [46.029159545898, 33.460548400879], [46.006469726563, 33.485778808594], [45.951934814453, 33.479713439942], [45.930549621582, 33.482765197754], [45.874225616455, 33.499786376953], [45.890670776367, 33.521617889405], [45.944778442383, 33.55436706543], [45.898880004883, 33.633049011231], [45.815063476563, 33.622417449951], [45.786087036133, 33.600490570068], [45.751693725586, 33.595024108887], [45.752326965332, 33.637283325195], [45.696727752686, 33.669437408447], [45.647380828857, 33.735061645508], [45.641056060791, 33.767387390137], [45.550270080567, 33.888603210449], [45.500133514404, 33.945888519287], [45.472602844239, 33.940532684326], [45.446796417236, 33.942489624023], [45.423740386963, 33.951103210449], [45.403606414795, 33.975200653076], [45.467212677002, 34.077079772949], [45.547252655029, 34.13419342041], [45.566520690918, 34.151309967041], [45.584167480469, 34.30126953125], [45.573329925537, 34.324024200439], [45.549438476563, 34.345546722412], [45.519855499268, 34.347351074219], [45.49235534668, 34.33512878418], [45.460548400879, 34.37845993042], [45.438632965088, 34.457836151123], [45.562923431397, 34.58610534668], [45.648468017578, 34.573471069336], [45.714668273926, 34.557605743408], [45.729572296143, 34.58561706543], [45.70832824707, 34.659156799317], [45.684017181397, 34.699298858643], [45.659641265869, 34.715339660645], [45.651657104492, 34.735198974609], [45.691101074219, 34.816520690918], [45.712631225586, 34.829578399658], [45.738327026367, 34.83097076416], [45.765056610107, 34.84627532959], [45.797733306885, 34.914039611817], [45.848743438721, 34.896938323975], [45.867767333984, 34.903602600098], [45.892353057861, 34.973041534424], [45.880546569824, 34.998878479004], [45.877769470215, 35.032493591309], [45.949821472168, 35.093269348145], [45.992065429688, 35.075233459472], [46.035755157471, 35.059226989746], [46.166007995606, 35.108516693115], [46.186603546143, 35.221717834472], [46.16019821167, 35.234157562256], [46.133049011231, 35.272491455078], [46.148048400879, 35.297462463379], [46.064994812012, 35.383331298828], [46.051101684571, 35.39916229248], [45.990966796875, 35.485198974609], [45.979988098145, 35.584716796875], [46.034160614014, 35.689018249512], [46.072772979736, 35.696655273438], [46.110691070557, 35.692626953125], [46.15124130249, 35.694847106934], [46.229431152344, 35.712211608887], [46.268600463867, 35.728042602539], [46.334159851074, 35.777488708496], [46.345199584961, 35.814193725586], [46.323608398438, 35.832633972168], [46.290966033936, 35.831520080566], [46.258888244629, 35.813049316406], [46.200687408447, 35.802768707276], [46.172908782959, 35.807353973389], [46.147739410401, 35.824039459229], [46.13554763794, 35.847354888916], [46.089366912842, 35.865482330322], [45.888168334961, 35.831985473633], [45.867908477783, 35.817775726318], [45.757125854492, 35.817348480224], [45.739990234375, 35.832214355469], [45.732906341553, 35.853466033936], [45.718879699707, 35.879573822022], [45.682495117188, 35.921936035156], [45.663322448731, 35.940544128418], [45.624519348145, 35.966278076172], [45.520072937012, 36.011169433594], [45.51054763794, 36.017768859863], [45.472480773926, 36.01679611206], [45.413883209229, 35.995418548584], [45.354438781738, 36.064437866211], [45.34359741211, 36.133880615234], [45.319709777832, 36.238319396973], [45.279159545898, 36.381103515625], [45.243740081787, 36.428318023682], [45.216102600098, 36.42887878418], [45.193878173828, 36.41943359375], [45.165542602539, 36.411376953125], [45.13916015625, 36.408874511719], [45.106948852539, 36.41817855835], [45.086513519287, 36.435195922852], [45.083923339844, 36.45764541626], [45.05525970459, 36.506107330322], [45.013088226318, 36.54285812378], [45.015830993652, 36.557769775391], [45.038814544678, 36.614227294922], [45.062767028809, 36.639640808105], [45.065410614014, 36.683048248291], [45.025550842285, 36.736381530762], [44.939224243164, 36.78207397461], [44.897766113281, 36.782348632813], [44.870536804199, 36.784572601318], [44.853042602539, 36.794578552246], [44.844501495361, 36.821929931641], [44.882488250733, 36.870681762695], [44.905536651611, 36.892551422119], [44.909423828125, 36.920539855957], [44.903114318848, 37.030475616455], [44.856517791748, 37.052627563477], [44.817489624024, 37.05581665039], [44.78498840332, 37.084716796875], [44.766170501709, 37.112281799316], [44.787338256836, 37.149711608887], [44.774089813233, 37.165962219239], [44.745826721192, 37.174430847168], [44.64221572876, 37.188461303711], [44.582767486572, 37.163185119629], [44.567630767822, 37.149711608887], [44.55054473877, 37.132633209229], [44.49055480957, 37.091651916504], [44.470275878906, 37.080825805664], [44.436378479004, 37.063041687012], [44.349708557129, 37.038322448731], [44.341102600098, 37.006652832031], [44.319160461426, 36.971237182617], [44.257076263428, 36.985687255859], [44.195964813233, 37.096378326416], [44.230266571045, 37.1540184021], [44.262596130371, 37.163467407227], [44.268325805664, 37.194999694824], [44.262145996094, 37.236518859863], [44.23055267334, 37.27624130249], [44.118881225586, 37.315685272217], [44.096099853516, 37.317214965821], [44.072944641113, 37.316375732422], [44.048049926758, 37.322219848633], [44.009014129639, 37.317768096924], [43.955821990967, 37.279640197754], [43.936935424805, 37.251937866211], [43.912979125977, 37.226589202881], [43.816375732422, 37.22193145752], [43.623046875, 37.229995727539], [43.489990234375, 37.251243591309], [43.156936645508, 37.373878479004], [43.002765655518, 37.339157104492], [42.96061706543, 37.323532104492], [42.924163818359, 37.327766418457], [42.894439697266, 37.335540771485], [42.82283782959, 37.367179870606], [42.786800384522, 37.383674621582], [42.765731811524, 37.371215820313], [42.724708557129, 37.351943969727], [42.588043212891, 37.175685882569], [42.57950592041, 37.153675079346], [42.531661987305, 37.147491455078], [42.376937866211, 37.117492675781], [42.355613708496, 37.106925964356], [42.378330230713, 37.072063446045], [42.374099731445, 37.063163757325], [42.367286682129, 37.055889129639], [42.183643341065, 36.89813762457], [42, 36.740386119502], [42, 36.666666666667], [42, 36.5], [42, 36.333333333333], [42, 36.166666666667], [42, 36], [42, 35.833333333333], [42, 35.666666666667], [42, 35.5], [42, 35.333333333333], [42, 35.166666666667], [42, 35], [42, 34.833333333333], [42, 34.666666666667], [42, 34.5], [42, 34.333333333333], [42, 34.166666666667], [42, 34], [42, 33.833333333333], [42, 33.666666666667], [42, 33.5], [42, 33.333333333333], [42, 33.166666666667], [42, 33], [42, 32.833333333333], [42, 32.666666666667], [42, 32.5], [42, 32.333333333333], [42, 32.166666666667], [42, 32], [42, 31.833333333333], [42, 31.666666666667], [42, 31.5], [42, 31.333333333333], [42, 31.146143140343],
                ],
            ],
        ];
    }
}
