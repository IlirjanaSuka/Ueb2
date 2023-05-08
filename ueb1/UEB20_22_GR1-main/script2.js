const cards = document.querySelectorAll('.card');

const toggleExpansion = (element, to, duration = 350) => {
  return new Promise((res) => {
    element.animate([
      {
  top: to.top,
  left: to.left,
  width: to.width,
  height: to.height
      }
    ], {duration, fill: 'forwards', ease: 'ease-in'})
    setTimeout(res, duration);
  })
}

const fadeContent = (element, opacity, duration = 300) => {
  return new Promise(res => {
    [...element.children].forEach((child) => {
      requestAnimationFrame(() => {
        child.style.transition = `opacity ${duration}ms linear`;
        child.style.opacity = opacity;
      });
    })
    setTimeout(res, duration);
  })
}

const getCardContent = (title, type) => {
    let content = '';
    if (title === '5 Libra që duhen lexuar për të frymëzuar suksesin') {
      content = `<p> “Not all readers are leaders, but all leaders are readers.” President Harry S. Truman<br>
      <b>Parimet e Suksesit nga Jack Canfield</b><br>
        Pse ta lexoni?<br>
        Ju mund të jeni njohur nga Jack Canfield nga seria e tij "Chicken Soup".Por qëllimi i Jack është "The Success Principles"
        Nëse jeni tip i orinetuar nga detajet, do t'ju pëlqej mënyra sesi Canfield pëshkruan 67 strategji nga njerëz shumë të suksesshëm
        ,të cilat mund t'i përshtatni me jetën tuaj,pavarësisht nga qëllimet tuaja.
     <br><br>
      <b>Shtatë zakonet e njerëzve shumë efektivë</b> nga Stephen Covey<br>
      Pse ta lexoni?<br>
       Ky klasik ka qenë i domosdoshëm për gati 30 vjet, dhe me arsye të mirë: 7 zakonet e Covey janë vlera thelbësore të thjeshta dhe të fokusuara që rezonojnë me shumë prej nesh.
       Nga "win-win" në "mprehjen e sharrës", idetë e Covey kanë formësuar pjesën më të madhe të leksikut të biznesit.
     <br><br>
      <b>Katër marrëveshjet: Një udhëzues praktik për lirinë personale</b>nga Don Miguel Ruiz<br>
      Pse ta lexoni?<br>
      Ky bestseller i New York Times bazohet në mençurinë Toltec të paraardhësve të Ruizit për të na dhënë Katër Marrëveshjet: Jini të patëmetë me fjalën tuaj. Mos merrni asgjë personalisht. Mos bëni supozime. 
      Gjithmonë bëni më të mirën tuaj. Përdorni marrëveshjet për të shkatërruar besimet vetëkufizuese që krijojnë pengesa dhe pengojnë lumturinë tuaj.
      <br><br>
      <b>Manifesti i Motivimit </b> nga Brendon Burchard<br>
      Pse ta lexoni?<br>
      Burchard thotë se secili prej nesh po kërkon lirinë personale dhe mbajtja e ndezur e zjarrit të motivimit mund të jetë një nga gjërat më të vështira që do të bëjmë ndonjëherë.
       Burchard mbështetet në zjarrin e Etërve Themelues për të frymëzuar motivimin tonë.
      <br><br>
      <b>Pengesa është Rruga </b> nga Ryan Holiday<br>
      Pse ta lexoni?<br>
      Jeta nuk është e lehtë. Nuk ka qenë kurrë. Por shumë shpesh, ne e lëmë dorën përpara se të arrijmë destinacionin tonë përfundimtar. Në këtë libër, Ryan bazohet në mençurinë e traditës stoike për t'ju frymëzuar, lavdëruar dhe motivuar për të kapërcyer çdo pengesë, për t'u ngjitur në çdo mal dhe për të gërmuar nën çdo pengesë në rrugën tuaj. 
      Ryan praktikoi nën një tjetër titan motivimi, Robert Greene, dhe kjo tregohet në këtë libër të shkurtër, të lehtë për t'u tretur.
     <br>
      Referenca:"https://books.forbes.com/author-articles/all-leaders-are-readers-six-must-read-books-to-inspire-success/>
      </p>`;
    } else if (title === 'Elevator Pitch') {
      content = `<p>‘‘Elevator pitch’’ është term që përdoret për një fjalim të shkurtër deri në 60 sekonda, që ju jep mundësinë ta përshkruani vetveten, eksperiencën tuaj, një ide, punën që bën organizata/kompania juaj etj. Termi ‘’elevator pitch’’ nënkupton nocionin që fjalimi duhet të jetë aq i shkurtër sa zgjat një udhëtim me ashensor.
      Nëse një ditë të zakonshme takoheni në ashensor me menaxherin e një kompanie shumë prestigjioze në të cilën gjithmonë keni ëndërruar të punoni, ju keni shumë pak sekonda deri sa ashensori të arrij në destinacionin e caktuar. Prandaj, është shumë e rëndësishme që ta prezantoni veten në mënyrën më të mirë të mundshme.
      vijim janë cekur disa pika që ta keni sa më të qartë se si strukturohet një ‘‘elevator pitch’’:<br>
      -Kohëzgjatja është e kufizuar<br>
       Mos e zgjatni prezantimin më shumë se 30-60 sekonda, sepse kaq është koha sa i duhet një ashensori të mbërrijë në destinacion. Nuk është e domosdoshme të tregoni për çdo detaj të karrierës tuaj, mjafton t’i përmendni disa pika kyçe.<br>
      -Tregoni aftësitë tuaja<br>
      Esenca e një ‘‘elevator pitch’’ është të tregoni në pak sekonda kush jeni dhe me çfarë merreni, çfarë kualifikime dhe aftësi keni. Fokusohuni në gjërat që kanë vlerë dhe janë më të përgjithshme. Në një farë forme ju duhet të mburreni me çka keni arritur deri sot, por asnjëherë mos e teproni me këtë.<br>
      -Praktikoni<br>
      Mënyra më e lehtë se si ta përvetësoni një ‘‘elevator pitch’’ është praktika. Ushtroni deri sa fjalimi të ju rrjedh natyrshëm dhe jo të tingëlloni sikur e keni mësuar përmendësh. Praktikoni me një shok/shoqe ose incizojeni veten. Kjo ju ndihmon ta shihni sa po i përmbaheni kohës. <br>
     -Tregoni qëllimet e juaja<br>
     Nuk do të thotë të jeni shumë specifik sepse të njëjtin ‘‘elevator pitch’’ mund ta përdorni me shumë njerëz që kanë interesa të ndryshme. E rëndësishme të tregoni se çfarë ju kërkoni dhe ku keni dëshirë të arrini.<br><br>
     <br><br><br><br><br><br><br><br><br>
     Referenca:https://busulla.com/advise/981a41a0-456f-407f-82bc-83712e7e1540
</p>`;
    }else if (title==='Faktorët ndikues në përzgjedhjen e karrierës'){
        content=`<p>  Shoqëria luan një rol mjaft të rëndësishëm në jetën personale dhe profesionale të një individi. 
        Prej fëmijërisë e deri më sot, një pjesë e madhe e vendimeve tuaja kanë qenë të orientuara nga perspektiva që shoqëria e ka.
         Ndër këto vendime ku faktorët si shoqëria dhe familja ndikojnë shumë, është edhe përzgjedhja e karrierës tuaj. Në vijim janë disa nga faktorët më përgjithshëm ndikues në zgjedhjen e profesionit tuaj:<br>
        - Shkathtësitë tuaja;<br>
         Interesimi dhe personaliteti;<br>
        - Roli që ju dëshironi të keni;<br>
        - Përvojat e mëparshme;<br>
        - Kultura;<br>
        - Kushtet ekonomike dhe sociale etj.<br>
        Këto janë vetëm disa nga faktorët të cilët ndikojnë në zgjedhjen që ju e bëni rreth profesionit tuaj të ardhshme. Por, disa nga faktorët kryesor janë:<br>
        - Ndikimi familjar<br>
        Që nga fëmijëria ju e keni pasur ndikimin e prindërve për zgjedhjet që i keni bërë. Ata kanë qenë të parët që ju kanë dhënë opinione dhe ide rreth punës, vlerës së gjësendeve dhe të hollave. Prindërit ndikojnë edhe në zhvillimin emocional tuaj. 
         Përgjatë gjithë kohës të zhvillimit tuaj, prindërit kanë qenë shtytësi kryesor për avancim në shkollë, ndonjë sport apo edhe në punë.<br>
        - Mësimdhënësit<br>
        Mësimdhënësit janë grupi i dytë i personave që kanë ndikim më të madh te fëmijët. Janë ata që ju udhëzojnë se çka është e saktë dhe janë formues të parafytyrimit tuaj për jetën.<br>
        - Mediat<br>
        Mediat janë një mjet i fuqishëm në formimin e perceptimit të botës. Informatat e pranuara nga mediat arrijnë që të ndikojnë në përzgjedhjen e së ardhmes tuaj.
         Gjithashtu ndikim të madh kanë filmat dhe emisionet që përqendrohen në një profesion duke e influencuar perceptimin tuaj për atë profesion.<br>
        Cilat janë pasojat e këtyre faktorëve?<br>
        - Pamundësia për t'u përshtatur me fushën<br>
        - Ulja e nivelit të vetëbesimit<br>
        - Niveli i ulët i kompetencës në punë<br>
        - Pakënaqësia në punë dhe karrierë etj.<br><br><br><br>
        Referenca:https://busulla.com/advise/fd56b5a9-6431-4b12-8144-ff08e6937cd4
       </p>`;
    }else if (title==='Çka nevojitet përveç motivimet për ti arritur qëllimet?'){
        content=`<p> Kur vendosim synime të reja, zakonisht jemi të mbushur me motivim. Në fillim, ndihemi sikur mund të arrijmë çdo gjë. Ne nuk kemi frikë të shohim ëndrra të mëdha dhe të besojmë në ëndrrat tona. 
        Mendojmë se gjithçka është e mundur dhe ne jemi të gatshëm të bëjmë çdo gjë që duhet për të arritur qëllimin tonë.
        Por, me kalimin e kohës, kjo ndjenjë zhduket dhe ne e gjejmë veten duke u zvarritur dhe duke i shtyrë afatet kohore. Kur kjo ndodh, zakonisht shumë shpejt arrijmë në përfundim se mungesa e motivimit ishte arsyeja që ne hoqëm dorë. E në fakt nuk qëndron gjithçka tek motivimi.
         Ajo që na nevojitet më shumë se motivimi është ‘’Dedikimi’’.
        Të jesh i përkushtuar ndaj një qëllimi, do të thotë që ju jeni të gatshëm të bëni sakrifica. Dedikimi është ajo që do t'ju shtyjë përpara.<br>
        Jëtu janë disa mënyra se si të mos hiqni dorë nga qëllimet tuaja, edhe nëse ju mungon motivimi:<br>
        -Zhvillimi i Disiplinës<br>
        Një mënyrë për të forcuar vullnetin tuaj është që të punoni në qëllimin tuaj çdo ditë, pa marrë parasysh se sa kohë keni shpenzuar për të. Në ditët kur keni më shumë energji, mund të shtoni më shumë ushtrime në 
        këtë rutinë dhe gradualisht me kalimin e kohës mund të lëvizni në një numër më të madh të ushtrimeve dhe kështu do jeni gjithnjë e më afër realizimit të qëllimeve tuaja.<br>
       -Kapërcimi i Rezistencës<br>
         Në librin e tij ‘’Lufta e Artit’’, Stiven Pressfield thotë: "Rezistenca është zëri në pjesën e prapme të kokës që na thotë të heqim dorë, të jemi të kujdesshëm, të ngadalësojmë, të bëjmë kompromise etj.”.
         Pressfield ofron mënyra se si duhet mposhtur ‘’Rezistenca’’. ‘’Duhet të jeni gjithmonë ambicioz”. Ai nuk thotë që të jeni më i miri në një profesion të caktuar. Ai thjesht thotë të shfaqesh çdo ditë dhe të bësh punën e duhur.<br>
        -Paraqitni rezultatin përfundimtar<br>
        Kjo ide duket e thjeshtë, por shumica e njerëzve i vendosin qëllimet dhe harrojnë të përqendrohen në rezultatin përfundimtar.
         Bëni pikturimin e rezultatit përfundimtar në kokën tuaj! Është e rëndësishme në radhë të parë t’ia kujtoni vetes pse po e bëni atë. 
         Jepini vetes kohë të nevojshme për të përfytyruar momentin kur e arrini qëllimin tuaj. Çfarë do t'ju sjellë? Si do të ndiheni kur të arrini atje?<br><br>
     <b>Motivimi është një nga elementet e nevojshme për të arritur qëllimet tuaja. Kjo është arsyeja përse ata që janë të përkushtuar dhe marrin një nxitje nga motivimi, përfundimisht arrijnë t'i bëjnë ëndrrat e tyre realitet.</b>
     <br><br><br><br><br><br><br><br><br>
        Referenca:https://busulla.com/advise/fa1fc354-26bb-42e3-a509-34e81ab4202c
       </p>`;
    }
    else if (title==='Cilat janë disa nga mundësitë e zhvillimit profesional'){
        content=`<p> KNë arsim, termi zhvillim profesional mund të përdoret në lidhje me një shumëllojshmëri të gjerë të trajnimeve të specializuara, arsimit formal ose të të mësuarit të avancuar profesional, e që ka për qëllim të ndihmojë administratorët,
         mësuesit dhe edukatorët e tjerë të përmirësojnë njohuritë, aftësitë dhe efektivitetin e tyre profesional.Mundësitë e zhvillimit profesional rrisin aftësitë e stafit, duke u lejuar atyre të shkëlqejnë në të gjitha aspektet e jetës së punës.<br>
         Cilat janë këto mundësi?<br>
         -Mentorimi<br>
         Mentorimi është një nga mundësitë më të mira të zhvillimit profesional, por që fatkeqësisht injorohet. Ndryshe nga llojet e tjera të zhvillimit profesional, mentorimi është reciprokisht i dobishëm. Si mentori ashtu edhe nxënësi, gëzojnë përfitime të panumërta.
          Gjithkush duhet të përfitojë nga një mundësi mentorimi nëse është e mundur.<br>
          -Edukimi i vazhdueshëm<br>
          Gjithmonë ka diçka për të mësuar, prandaj edukimi i vazhdueshëm është një formë mjaft e mirë e zhvillimit profesional. Punëtorët mund të ndjekin një diplomë formale ose të regjistrohen në kurse dhe seminare.<br>
          -Botimet<br>
          Botimi është një nga mundësitë më të mira të zhvillimit profesional në dispozicion. Kjo është veçanërisht tërheqëse për ata që janë të përfshirë në fushën e kërkimit/hulumtimit. Punëtorët shpesh bashkëpunojnë me të tjerët kur botojnë artikuj. 
          Kjo i ndihmon njerëzit të mësojnë më shumë rreth fushave të tyre të studimit. <br>
          -Prezantimet<br>
          Prezantimet e punës janë një mundësi tjetër për zhvillim profesional. Punëtorët mund të bashkëpunojnë për përgatitjen e një prezantimi. Ata mësojnë mjaft dhe marrin përvojë duke u paraqitur para grupeve të njerëzve. <br>
          -Hulumtimet<br>
          Punëtorët mund të kryejnë hulumtime si një formë të zhvillimit profesional. Ata do të mësojnë mjaft për industrinë dhe do të kenë një vlerësim dhe mendim të ri për kompaninë në tërësi. 
          Gjithashtu mund të bëhen burime kur punëtorët e tjerë kanë nevojë për informacion. <br>
          Rëndësia e zhvillimit profesional<br>
          -Siguron që ju të mbani dhe rrisni njohuritë dhe aftësitë që ju nevojiten për të ofruar një shërbim profesional për klientët dhe komunitetin tuaj.<br>
          -Ju ndihmon të vazhdoni të jepni një kontribut domethënës në ekipin tuaj. Ju bëheni më efektiv në vendin e punës. Kjo ju ndihmon që të avancoheni në karrierën tuaj.<br>
          -Ju hap mundësi, njohuri të reja dhe fusha të reja të aftësive.<br>
          -Mund t'i jep një kuptim më të thellë asaj që do të thotë të jeshë një profesionist, së bashku me një vlerësim më të madh të implikimeve dhe ndikimeve të punës tuaj.<br>
          -Mund të çojë në rritjen e besimit të publikut tek profesionistët individualë dhe profesionin e tyre si një tërësi.<br>
         <br>
        Referenca:https://busulla.com/advise/5b074ddd-4c4d-4bc3-9f4d-c27b72c4aca0
       </p>`;
    }
    return `
      <div class="card-content ">
        <h4>${title}</h4>
        ${content}
      </div>
    `;
  }
const onCardClick = async (e) => {
  const card = e.currentTarget;
  const cardClone = card.cloneNode(true);
  const {top, left, width, height} = card.getBoundingClientRect();
  cardClone.style.position = 'fixed';
  cardClone.style.top = top + 'px';
  cardClone.style.left = left + 'px';
  cardClone.style.width = width + 'px';
  cardClone.style.height = height + 'px';
  card.style.opacity = '0';
  card.parentNode.appendChild(cardClone);
  const closeButton = document.createElement('button');
  closeButton.style = `
    position: fixed;
    z-index: 10000;
    top: 35px;
    right: 35px;
    width: 30px;
    height: 30px;
    border-radius: 50% ;
    border: 2px solid #fff;
    background-color: #fff;
  `;

  closeButton.addEventListener('click', async () => {
   
    closeButton.remove();
   
    cardClone.style.removeProperty('display');
    cardClone.style.removeProperty('padding');
   
    [...cardClone.children].forEach(child => child.style.removeProperty('display'));
    fadeContent(cardClone, '0');
   
    await toggleExpansion(cardClone, {top: `${top}px`, left: `${left}px`, width: `${width}px`, height: `${height}px`}, 300)
   
    card.style.removeProperty('opacity');
    
    cardClone.remove();
  });
 
  fadeContent(cardClone, '0')
    .then(() => {
      [...cardClone.children].forEach(child => child.style.display = 'none');
    });

  await toggleExpansion(cardClone, {top: 0, left: 0, width: '100vw', height: '100vh'});
  const content = getCardContent(card.dataset.title, card.dataset.type)
 
  cardClone.style.display = 'block';
  cardClone.style.padding = '0';
 
  cardClone.appendChild(closeButton);
  cardClone.insertAdjacentHTML('afterbegin', content);
};

cards.forEach(card => card.addEventListener('click', onCardClick));
