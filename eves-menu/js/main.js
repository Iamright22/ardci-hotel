// reloading page when click back
window.addEventListener("pageshow", function (event) {
  var historyTraversal =
    event.persisted ||
    (typeof window.performance != "undefined" &&
      window.performance.navigation.type === 2);
  if (historyTraversal) {
    // Handle page restore.
    window.location.reload();
  }
});
$(function () {
  // year footer
  const d = new Date();
  let year = d.getFullYear();
  document.getElementById("yearF").innerHTML = year;
});

function addCartNumber() {
  // getting the length array in the local storage
  var localStarter = JSON.parse(sessionStorage.getItem("Starter")) || [],
    localSoup = JSON.parse(sessionStorage.getItem("Soup")) || [],
    localSRice = JSON.parse(sessionStorage.getItem("Special Rice")) || [],
    localBeef = JSON.parse(sessionStorage.getItem("Beef")) || [],
    localSeafood = JSON.parse(sessionStorage.getItem("Seafood")) || [],
    localChicken = JSON.parse(sessionStorage.getItem("Chicken")) || [],
    localSalad = JSON.parse(sessionStorage.getItem("Salad")) || [],
    localPork = JSON.parse(sessionStorage.getItem("Pork")) || [],
    localVeges = JSON.parse(sessionStorage.getItem("Vegetable")) || [],
    localDessert = JSON.parse(sessionStorage.getItem("Dessert")) || [],
    localAllDayB =
      JSON.parse(sessionStorage.getItem("All Day Breakfast")) || [],
    localPizza = JSON.parse(sessionStorage.getItem("Pizza")) || [],
    localBurger = JSON.parse(sessionStorage.getItem("Burger")) || [];
  (localPasta = JSON.parse(sessionStorage.getItem("Pasta")) || []),
    (localBread = JSON.parse(sessionStorage.getItem("Bread")) || []),
    (localSandwich = JSON.parse(sessionStorage.getItem("Sandwich")) || []),
    (localnoodles = JSON.parse(sessionStorage.getItem("Noodles")) || []),
    (localbilao = JSON.parse(sessionStorage.getItem("Bilao")) || []),
    (localdrinks = JSON.parse(sessionStorage.getItem("Drinks")) || []),
    (localfrappes = JSON.parse(sessionStorage.getItem("Frappes")) || []),
    (localsmoothies = JSON.parse(sessionStorage.getItem("Smoothies")) || []),
    (localflavoredDrinks =
      JSON.parse(sessionStorage.getItem("Flavored Drinks")) || []);
  (localotherDrinks = JSON.parse(sessionStorage.getItem("Other Drinks")) || []),
    (localgroupMeal = JSON.parse(sessionStorage.getItem("Group Meal")) || []);
  (localsnackPackage =
    JSON.parse(sessionStorage.getItem("Snack Package")) || []),
    (localbeerPackage =
      JSON.parse(sessionStorage.getItem("Beer Package")) || []);

  // adding the string length
  orderNumTotal =
    localStarter.length +
    localSoup.length +
    localSRice.length +
    localBeef.length +
    localSeafood.length +
    localChicken.length +
    localSalad.length +
    localPork.length +
    localVeges.length +
    localDessert.length +
    localAllDayB.length +
    localPizza.length +
    localBurger.length +
    localPasta.length +
    localBread.length +
    localSandwich.length +
    localnoodles.length +
    localbilao.length +
    localdrinks.length +
    localfrappes.length +
    localsmoothies.length +
    localflavoredDrinks.length +
    localotherDrinks.length +
    localgroupMeal.length +
    localsnackPackage.length +
    localbeerPackage.length;

  // display the added string length to the span in list icon
  document.getElementById("order-list-count").innerHTML = orderNumTotal;
}

function allOrdertosessionStorage() {
  // if not null store the array in the local storage
  if (starterList != "") {
    window.sessionStorage.setItem("Starter", JSON.stringify(starterList));
  }

  if (soupList != "") {
    window.sessionStorage.setItem("Soup", JSON.stringify(soupList));
  }

  if (sRiceList != "") {
    window.sessionStorage.setItem("Special Rice", JSON.stringify(sRiceList));
  }
  if (beefList != "") {
    window.sessionStorage.setItem("Beef", JSON.stringify(beefList));
  }
  if (seafoodList != "") {
    window.sessionStorage.setItem("Seafood", JSON.stringify(seafoodList));
  }
  if (chickenList != "") {
    window.sessionStorage.setItem("Chicken", JSON.stringify(chickenList));
  }
  if (saladList != "") {
    window.sessionStorage.setItem("Salad", JSON.stringify(saladList));
  }
  if (porkList != "") {
    window.sessionStorage.setItem("Pork", JSON.stringify(porkList));
  }
  if (vegesList != "") {
    window.sessionStorage.setItem("Vegetable", JSON.stringify(vegesList));
  }
  if (dessertList != "") {
    window.sessionStorage.setItem("Dessert", JSON.stringify(dessertList));
  }
  if (allDayBList != "") {
    window.sessionStorage.setItem(
      "All Day Breakfast",
      JSON.stringify(allDayBList)
    );
  }
  if (pizzaList != "") {
    window.sessionStorage.setItem("Pizza", JSON.stringify(pizzaList));
  }
  if (burgerList != "") {
    window.sessionStorage.setItem("Burger", JSON.stringify(burgerList));
  }
  if (pastaList != "") {
    window.sessionStorage.setItem("Pasta", JSON.stringify(pastaList));
  }
  if (breadList != "") {
    window.sessionStorage.setItem("Bread", JSON.stringify(breadList));
  }
  if (sandwichList != "") {
    window.sessionStorage.setItem("Sandwich", JSON.stringify(sandwichList));
  }
  if (noodlesList != "") {
    window.sessionStorage.setItem("Noodles", JSON.stringify(noodlesList));
  }
  if (bilaoList != "") {
    window.sessionStorage.setItem("Bilao", JSON.stringify(bilaoList));
  }
  if (drinksList != "") {
    window.sessionStorage.setItem("Drinks", JSON.stringify(drinksList));
  }
  if (frappesList != "") {
    window.sessionStorage.setItem("Frappes", JSON.stringify(frappesList));
  }
  if (smoothiesList != "") {
    window.sessionStorage.setItem("Smoothies", JSON.stringify(smoothiesList));
  }
  if (flavoredDrinksList != "") {
    window.sessionStorage.setItem(
      "Flavored Drinks",
      JSON.stringify(flavoredDrinksList)
    );
  }
  if (otherDrinksList != "") {
    window.sessionStorage.setItem(
      "Other Drinks",
      JSON.stringify(otherDrinksList)
    );
  }
  if (groupMealList != "") {
    window.sessionStorage.setItem("Group Meal", JSON.stringify(groupMealList));
  }
  if (snackPackageList != "") {
    window.sessionStorage.setItem(
      "Snack Package",
      JSON.stringify(snackPackageList)
    );
  }
  if (beerPackageList != "") {
    window.sessionStorage.setItem(
      "Beer Package",
      JSON.stringify(beerPackageList)
    );
  }

  // move this to addcartnumber function
  addCartNumber();
}

let starterList = JSON.parse(sessionStorage.getItem("Starter")) || [];
let starterOrder;

function starterArrayy(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let starterResult = starterList.every(function (res) {
    return res != dataName;
  });

  if (starterResult == true) {
    starterOrder = starterList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

let soupList = JSON.parse(sessionStorage.getItem("Soup")) || [];
let soupOrder;
//  pushing array item to soup

function soupArrayy(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let soupResult = soupList.every(function (res) {
    return res != dataName;
  });

  if (soupResult == true) {
    soupOrder = soupList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// special rice
let sRiceList = JSON.parse(sessionStorage.getItem("Special Rice")) || [];
let sRiceOrder;

function riceArrayy(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let sRiceResult = sRiceList.every(function (res) {
    return res != dataName;
  });

  if (sRiceResult == true) {
    sRiceOrder = sRiceList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

function steamedRice() {
  var rPlater = document.getElementById("ricePlater");
  var rCup = document.getElementById("riceCup");

  if (rPlater.checked == true) {
    let sRiceResult = sRiceList.every(function (res) {
      return res != "Steamed Rice (Platter)";
    });
    if (sRiceResult == true) {
      sRiceOrder = sRiceList.push("Steamed Rice (Platter)");
      allOrdertosessionStorage();

      alert(
        "The dish called Steamed Rice (Platter) has been included in the list."
      );
    } else {
      alert("Steamed Rice (Platter) already added in the list.");
    }
  } else if (rCup.checked == true) {
    let sRiceResult = sRiceList.every(function (res) {
      return res != "Steamed Rice (Cup)";
    });
    if (sRiceResult == true) {
      sRiceOrder = sRiceList.push("Steamed Rice (Cup)");
      allOrdertosessionStorage();

      alert(
        "The dish called Steamed Rice (Cup) has been included in the list."
      );
    } else {
      alert("Steamed Rice (Cup) already added in the list.");
    }
  } else if (rPlater.checked == false && rCup.checked == false) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }
}
function garlicFRice() {
  var gRPlater = document.getElementById("gRicePlater");
  var gRCup = document.getElementById("gRiceCup");

  if (gRPlater.checked == true) {
    let sRiceResult = sRiceList.every(function (res) {
      return res != "Garlic Fried Rice (Platter)";
    });
    if (sRiceResult == true) {
      sRiceOrder = sRiceList.push("Garlic Fried Rice (Platter)");
      allOrdertosessionStorage();

      alert(
        "The dish called Garlic Fried Rice (Platter) has been included in the list."
      );
    } else {
      alert("Garlic Fried Rice (Platter) already added in the list.");
    }
  } else if (gRCup.checked == true) {
    let sRiceResult = sRiceList.every(function (res) {
      return res != "Garlic Fried Rice (Cup)";
    });
    if (sRiceResult == true) {
      sRiceOrder = sRiceList.push("Garlic Fried Rice (Cup)");
      allOrdertosessionStorage();

      alert(
        "The dish called Garlic Fried Rice (Cup) has been included in the list."
      );
    } else {
      alert("Garlic Fried Rice (Cup) already added in the list.");
    }
  } else if (gRPlater.checked == false && gRCup.checked == false) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }
}

// beef
let beefList = JSON.parse(sessionStorage.getItem("Beef")) || [];
let beefOrder;

function beefArrayy(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let beefResult = beefList.every(function (res) {
    return res != dataName;
  });

  if (beefResult == true) {
    beefOrder = beefList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// seafood
let seafoodList = JSON.parse(sessionStorage.getItem("Seafood")) || [];
let seafoodOrder;

function seafoodArrayy(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let seafoodResult = seafoodList.every(function (res) {
    return res != dataName;
  });

  if (seafoodResult == true) {
    seafoodOrder = seafoodList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// chicken
let chickenList = JSON.parse(sessionStorage.getItem("Chicken")) || [];
let chickenOrder;

function friedChicken() {
  var chickHalf = document.getElementById("friedChickenHalf"),
    chickenWhole = document.getElementById("friedChickenWhole"),
    dataName;

  if (chickHalf.checked == true) {
    dataName = "Fried Chicken (Half)";
  }
  if (chickenWhole.checked == true) {
    dataName = "Fried Chicken (Whole)";
  }
  if (chickHalf.checked == false && chickenWhole.checked == false) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let chickenResult = chickenList.every(function (res) {
      return res != dataName;
    });
    if (chickenResult == true) {
      chickenOrder = chickenList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}
function crispyChicken() {
  var crisChikHalf = document.getElementById("crispyChickenHalf"),
    crisChikWhole = document.getElementById("crispyChickenWhole"),
    dataName;

  if (crisChikHalf.checked == true) {
    dataName = "Crispy Chicken (Half)";
  }
  if (crisChikWhole.checked == true) {
    dataName = "Crispy Chicken (Whole)";
  }
  if (crisChikHalf.checked == false && crisChikWhole.checked == false) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let chickenResult = chickenList.every(function (res) {
      return res != dataName;
    });
    if (chickenResult == true) {
      chickenOrder = chickenList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}
function butteredChicken() {
  var butteredChikHalf = document.getElementById("butteredChickenHalf"),
    butteredChikWhole = document.getElementById("butteredChickenWhole"),
    dataName;

  if (butteredChikHalf.checked == true) {
    dataName = "Buttered Chicken (Half)";
  }
  if (butteredChikWhole.checked == true) {
    dataName = "Buttered Chicken (Whole)";
  }
  if (butteredChikHalf.checked == false && butteredChikWhole.checked == false) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let chickenResult = chickenList.every(function (res) {
      return res != dataName;
    });
    if (chickenResult == true) {
      chickenOrder = chickenList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}
function chiceknBBQ() {
  var chikBbqHalf = document.getElementById("chickenBBQHalf"),
    chikBbqWhole = document.getElementById("chickenBBQWhole"),
    dataName;

  if (chikBbqHalf.checked == true) {
    dataName = "Chicken Barbecue (Half)";
  }
  if (chikBbqWhole.checked == true) {
    dataName = "Chicken Barbecue (Whole)";
  }
  if (chikBbqHalf.checked == false && chikBbqWhole.checked == false) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let chickenResult = chickenList.every(function (res) {
      return res != dataName;
    });
    if (chickenResult == true) {
      chickenOrder = chickenList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}
function chickenWings() {
  var chickwingsHoney = document.getElementById("chickwingsHoney"),
    chickwingsBuffalo = document.getElementById("chickwingsBuffalo"),
    chickwingsParmesan = document.getElementById("chickwingsParmesan"),
    dataName;

  if (chickwingsHoney.checked == true) {
    dataName = "Chicken Wings (Honey Garlic)";
  }
  if (chickwingsBuffalo.checked == true) {
    dataName = "Chicken Wings (Buffalo)";
  }
  if (chickwingsParmesan.checked == true) {
    dataName = "Chicken Wings (Parmesan Cheese)";
  }
  if (
    chickwingsHoney.checked == false &&
    chickwingsBuffalo.checked == false &&
    chickwingsParmesan.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let chickenResult = chickenList.every(function (res) {
      return res != dataName;
    });
    if (chickenResult == true) {
      chickenOrder = chickenList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}
function chickenArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let chickenResult = chickenList.every(function (res) {
    return res != dataName;
  });

  if (chickenResult == true) {
    chickenOrder = chickenList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// salad
let saladList = JSON.parse(sessionStorage.getItem("Salad")) || [];
let saladOrder;

function saladArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let saladResult = saladList.every(function (res) {
    return res != dataName;
  });

  if (saladResult == true) {
    saladOrder = saladList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// pork
let porkList = JSON.parse(sessionStorage.getItem("Pork")) || [];
let porkOrder;

function porkArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let porkResult = porkList.every(function (res) {
    return res != dataName;
  });

  if (porkResult == true) {
    saladOrder = porkList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// vegetable
let vegesList = JSON.parse(sessionStorage.getItem("Vegetable")) || [];
let vegesOrder;

function vegesArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let vegesResult = vegesList.every(function (res) {
    return res != dataName;
  });

  if (vegesResult == true) {
    vegesOrder = vegesList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// dessert
let dessertList = JSON.parse(sessionStorage.getItem("Dessert")) || [];
let dessertOrder;

function dessertArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let dessertResult = dessertList.every(function (res) {
    return res != dataName;
  });

  if (dessertResult == true) {
    dessertOrder = dessertList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// allday breakfast
let allDayBList = JSON.parse(sessionStorage.getItem("All Day Breakfast")) || [];
let allDayBOrder;

function allDayBArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let allDayBResult = allDayBList.every(function (res) {
    return res != dataName;
  });

  if (allDayBResult == true) {
    allDayBOrder = allDayBList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// pizza
let pizzaList = JSON.parse(sessionStorage.getItem("Pizza")) || [];
let pizzaOrder;

function pizzaArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let pizzaResult = pizzaList.every(function (res) {
    return res != dataName;
  });

  if (pizzaResult == true) {
    pizzaOrder = pizzaList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// burger
let burgerList = JSON.parse(sessionStorage.getItem("Burger")) || [];
let burgerOrder;

function burgerArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let burgerResult = burgerList.every(function (res) {
    return res != dataName;
  });

  if (burgerResult == true) {
    burgerOrder = burgerList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// pasta
let pastaList = JSON.parse(sessionStorage.getItem("Pasta")) || [];
let pastaOrder;

function pastaArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let pastaResult = pastaList.every(function (res) {
    return res != dataName;
  });

  if (pastaResult == true) {
    pastaOrder = pastaList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}
function cabonara() {
  var carbonaraPlatter = document.getElementById("carbonaraPlater"),
    carbonaraSingle = document.getElementById("carbonaraSingle"),
    dataName;

  if (carbonaraPlatter.checked == true) {
    dataName = "Carbonara (Platter)";
  }
  if (carbonaraSingle.checked == true) {
    dataName = "Carbonara (Single)";
  }
  if (carbonaraPlatter.checked == false && carbonaraSingle.checked == false) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let pastaResult = pastaList.every(function (res) {
      return res != dataName;
    });

    if (pastaResult == true) {
      pastaOrder = pastaList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}
function spaghetti() {
  var spaghettiPlatter = document.getElementById("spaghettiPlater"),
    spaghettiSingle = document.getElementById("spaghettiSingle"),
    dataName;

  if (spaghettiPlatter.checked == true) {
    dataName = "Spaghetti (Platter)";
  }
  if (spaghettiSingle.checked == true) {
    dataName = "Spaghetti (Single)";
  }
  if (spaghettiPlatter.checked == false && spaghettiSingle.checked == false) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let pastaResult = pastaList.every(function (res) {
      return res != dataName;
    });

    if (pastaResult == true) {
      pastaOrder = pastaList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}

// bread
let breadList = JSON.parse(sessionStorage.getItem("Bread")) || [];
let breadOrder;

function breadArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let breadResult = breadList.every(function (res) {
    return res != dataName;
  });

  if (breadResult == true) {
    breadOrder = breadList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// sandwich
let sandwichList = JSON.parse(sessionStorage.getItem("Sandwich")) || [];
let sandwichOrder;

function sandwichArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let sandwichResult = sandwichList.every(function (res) {
    return res != dataName;
  });

  if (sandwichResult == true) {
    sandwichOrder = sandwichList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// noodles
let noodlesList = JSON.parse(sessionStorage.getItem("Noodles")) || [];
let noodlesOrder;

function noodlesArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let noodlesResult = noodlesList.every(function (res) {
    return res != dataName;
  });

  if (noodlesResult == true) {
    noodlesOrder = noodlesList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// bilao
let bilaoList = JSON.parse(sessionStorage.getItem("Bilao")) || [];
let bilaoOrder;

function bihonGuisadoBilao() {
  var bihonGuisadoSmall = document.getElementById("bihonGuisadoSmall"),
    bihonGuisadoMedium = document.getElementById("bihonGuisadoMedium"),
    bihonGuisadoLarge = document.getElementById("bihonGuisadoLarge"),
    dataName;

  if (bihonGuisadoSmall.checked == true) {
    dataName = "Bihon Guisado (Small)";
  }
  if (bihonGuisadoMedium.checked == true) {
    dataName = "Bihon Guisado (Medium)";
  }
  if (bihonGuisadoLarge.checked == true) {
    dataName = "Bihon Guisado (Large)";
  }
  if (
    bihonGuisadoSmall.checked == false &&
    bihonGuisadoMedium.checked == false &&
    bihonGuisadoLarge.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let bihonguisadobilaoResult = bilaoList.every(function (res) {
      return res != dataName;
    });
    if (bihonguisadobilaoResult == true) {
      bilaoOrder = bilaoList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}

function pancitCantonGuisadoBilao() {
  var pancitCantonSmall = document.getElementById("pancitCantonGuisadoSmall"),
    pancitCantonMedium = document.getElementById("pancitCantonGuisadoMedium"),
    pancitCantonLarge = document.getElementById("pancitCantonGuisadoLarge"),
    dataName;

  if (pancitCantonSmall.checked == true) {
    dataName = "Pancit Canton (Small)";
  }
  if (pancitCantonMedium.checked == true) {
    dataName = "Pancit Canton (Medium)";
  }
  if (pancitCantonLarge.checked == true) {
    dataName = "Pancit Canton (Large)";
  }
  if (
    pancitCantonSmall.checked == false &&
    pancitCantonMedium.checked == false &&
    pancitCantonLarge.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let pancitCantonbilaoResult = bilaoList.every(function (res) {
      return res != dataName;
    });
    if (pancitCantonbilaoResult == true) {
      bilaoOrder = bilaoList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}

function carbonaraBilao() {
  var carbonaraSmall = document.getElementById("carbonaraSmall"),
    carbonaraMedium = document.getElementById("carbonaraMedium"),
    carbonaraLarge = document.getElementById("carbonaraLarge"),
    dataName;

  if (carbonaraSmall.checked == true) {
    dataName = "Carbonara (Small)";
  }
  if (carbonaraMedium.checked == true) {
    dataName = "Carbonara (Medium)";
  }
  if (carbonaraLarge.checked == true) {
    dataName = "Carbonara (Large)";
  }
  if (
    carbonaraSmall.checked == false &&
    carbonaraMedium.checked == false &&
    carbonaraLarge.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let carbonarabilaoResult = bilaoList.every(function (res) {
      return res != dataName;
    });
    if (carbonarabilaoResult == true) {
      bilaoOrder = bilaoList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}

function spagBilao() {
  var spagSmall = document.getElementById("spagSmall"),
    spagMedium = document.getElementById("spagMedium"),
    spagLarge = document.getElementById("spagLarge"),
    dataName;

  if (spagSmall.checked == true) {
    dataName = "Spaghetti (Small)";
  }
  if (spagMedium.checked == true) {
    dataName = "Spaghetti (Medium)";
  }
  if (spagLarge.checked == true) {
    dataName = "Spaghetti (Large)";
  }
  if (
    spagSmall.checked == false &&
    spagMedium.checked == false &&
    spagLarge.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let spagbilaoResult = bilaoList.every(function (res) {
      return res != dataName;
    });
    if (spagbilaoResult == true) {
      bilaoOrder = bilaoList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}

function sotanghonBilao() {
  var sotanghonBilaoSmall = document.getElementById("sotanghonSmall"),
    sotanghonBilaoMedium = document.getElementById("sotanghonMedium"),
    sotanghonBilaoLarge = document.getElementById("sotanghonLarge"),
    dataName;

  if (sotanghonBilaoSmall.checked == true) {
    dataName = "Sotanghon Bilao (Small)";
  }
  if (sotanghonBilaoMedium.checked == true) {
    dataName = "Sotanghon Bilao (Medium)";
  }
  if (sotanghonBilaoLarge.checked == true) {
    dataName = "Sotanghon Bilao (Large)";
  }
  if (
    sotanghonBilaoSmall.checked == false &&
    sotanghonBilaoMedium.checked == false &&
    sotanghonBilaoLarge.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let sotanghonBilaoResult = bilaoList.every(function (res) {
      return res != dataName;
    });
    if (sotanghonBilaoResult == true) {
      bilaoOrder = bilaoList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}

function bihonBilao() {
  var bihonBilaoSmall = document.getElementById("bihonSmall"),
    bihonBilaoMedium = document.getElementById("bihonMedium"),
    bihonBilaoLarge = document.getElementById("bihonLarge"),
    dataName;

  if (bihonBilaoSmall.checked == true) {
    dataName = "Bihon Bilao (Small)";
  }
  if (bihonBilaoMedium.checked == true) {
    dataName = "Bihon Bilao (Medium)";
  }
  if (bihonBilaoLarge.checked == true) {
    dataName = "Bihon Bilao (Large)";
  }
  if (
    bihonBilaoSmall.checked == false &&
    bihonBilaoMedium.checked == false &&
    bihonBilaoLarge.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let bihonBilaoResult = bilaoList.every(function (res) {
      return res != dataName;
    });
    if (bihonBilaoResult == true) {
      bilaoOrder = bilaoList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}

function mikiBihonBilao() {
  var mikiBilaoSmall = document.getElementById("mikiBihonSmall"),
    mikiBilaoMedium = document.getElementById("mikiBihonMedium"),
    mikiBilaoLarge = document.getElementById("mikiBihonLarge"),
    dataName;

  if (mikiBilaoSmall.checked == true) {
    dataName = "Miki Bihon (Small)";
  }
  if (mikiBilaoMedium.checked == true) {
    dataName = "Miki Bihon (Medium)";
  }
  if (mikiBilaoLarge.checked == true) {
    dataName = "Miki Bihon (Large)";
  }
  if (
    mikiBilaoSmall.checked == false &&
    mikiBilaoMedium.checked == false &&
    mikiBilaoLarge.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let mikiBilaoResult = bilaoList.every(function (res) {
      return res != dataName;
    });
    if (mikiBilaoResult == true) {
      bilaoOrder = bilaoList.push(dataName);
      allOrdertosessionStorage();

      alert("The dish called " + dataName + " has been included in the list.");
    } else {
      alert("The dish " + dataName + " has already been included in the list");
    }
  }
}

// drinks
let drinksList = JSON.parse(sessionStorage.getItem("Drinks")) || [];
let drinksOrder;

function drinksArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let drinksResult = drinksList.every(function (res) {
    return res != dataName;
  });

  if (drinksResult == true) {
    drinksOrder = drinksList.push(dataName);
    allOrdertosessionStorage();

    alert("The item called " + dataName + " has been included in the list.");
  } else {
    alert("The item " + dataName + " has already been included in the list");
  }
}

function americano() {
  var americanoHot = document.getElementById("americanoHot"),
    americanoCold12 = document.getElementById("americanoCold12"),
    americanoCold16 = document.getElementById("americanoCold16"),
    dataName;

  if (americanoHot.checked == true) {
    dataName = "Americano (Hot)";
  }
  if (americanoCold12.checked == true) {
    dataName = "Americano (12oz Cold)";
  }
  if (americanoCold16.checked == true) {
    dataName = "Americano (16oz Cold)";
  }
  if (
    americanoHot.checked == false &&
    americanoCold12.checked == false &&
    americanoCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

function cafeLatte() {
  var cafeLatteHot = document.getElementById("cafeLatteHot"),
    cafeLatteCold12 = document.getElementById("cafeLatteCold12"),
    cafeLatteCold16 = document.getElementById("cafeLatteCold16"),
    dataName;

  if (cafeLatteHot.checked == true) {
    dataName = "Café Latte (Hot)";
  }
  if (cafeLatteCold12.checked == true) {
    dataName = "Café Latte (12oz Cold)";
  }
  if (cafeLatteCold16.checked == true) {
    dataName = "Café Latte (16oz Cold)";
  }
  if (
    cafeLatteHot.checked == false &&
    cafeLatteCold12.checked == false &&
    cafeLatteCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

function whiteChocoLatte() {
  var whiteChocoLatteHot = document.getElementById("whiteChocoLatteHot"),
    whiteChocoLatteCold12 = document.getElementById("whiteChocoLatteCold12"),
    whiteChocoLatteCold16 = document.getElementById("whiteChocoLatteCold16"),
    dataName;

  if (whiteChocoLatteHot.checked == true) {
    dataName = "White Choco Latte (Hot)";
  }
  if (whiteChocoLatteCold12.checked == true) {
    dataName = "White Choco Latte (12oz Cold)";
  }
  if (whiteChocoLatteCold16.checked == true) {
    dataName = "White Choco Latte (16oz Cold)";
  }
  if (
    whiteChocoLatteHot.checked == false &&
    whiteChocoLatteCold12.checked == false &&
    whiteChocoLatteCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

function cappuccino() {
  var capuccinoHot = document.getElementById("capuccinoHot"),
    capuccinoCold12 = document.getElementById("capuccinoCold12"),
    capuccinoCold16 = document.getElementById("capuccinoCold16"),
    dataName;

  if (capuccinoHot.checked == true) {
    dataName = "Cappucino (Hot)";
  }
  if (capuccinoCold12.checked == true) {
    dataName = "Cappucino (12oz Cold)";
  }
  if (capuccinoCold16.checked == true) {
    dataName = "Cappucino (16oz Cold)";
  }
  if (
    capuccinoHot.checked == false &&
    capuccinoCold12.checked == false &&
    capuccinoCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

function mochaccino() {
  var mochaccinoHot = document.getElementById("mochaccinoHot"),
    mochaccinoCold12 = document.getElementById("mochaccinoCold12"),
    mochaccinoCold16 = document.getElementById("mochaccinoCold16"),
    dataName;

  if (mochaccinoHot.checked == true) {
    dataName = "Mochaccino (Hot)";
  }
  if (mochaccinoCold12.checked == true) {
    dataName = "Mochaccino (12oz Cold)";
  }
  if (mochaccinoCold16.checked == true) {
    dataName = "Mochaccino (16oz Cold)";
  }
  if (
    mochaccinoHot.checked == false &&
    mochaccinoCold12.checked == false &&
    mochaccinoCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

function caramelMacchiato() {
  var caramelMacchiatoHot = document.getElementById("caramelMacchiatoHot"),
    caramelMacchiatoCold12 = document.getElementById("caramelMacchiatoCold12"),
    caramelMacchiatoCold16 = document.getElementById("caramelMacchiatoCold16"),
    dataName;

  if (caramelMacchiatoHot.checked == true) {
    dataName = "Caramel Macchiato (Hot)";
  }
  if (caramelMacchiatoCold12.checked == true) {
    dataName = "Caramel Macchiato (12oz Cold)";
  }
  if (caramelMacchiatoCold16.checked == true) {
    dataName = "Caramel Macchiato (16oz Cold)";
  }
  if (
    caramelMacchiatoHot.checked == false &&
    caramelMacchiatoCold12.checked == false &&
    caramelMacchiatoCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

function irishLatte() {
  var irishLatteHot = document.getElementById("irishLatteHot"),
    irishLatteCold12 = document.getElementById("irishLatteCold12"),
    irishLatteCold16 = document.getElementById("irishLatteCold16"),
    dataName;

  if (irishLatteHot.checked == true) {
    dataName = "Irish Latte (Hot)";
  }
  if (irishLatteCold12.checked == true) {
    dataName = "Irish Latte (12oz Cold)";
  }
  if (irishLatteCold16.checked == true) {
    dataName = "Irish Latte (16oz Cold)";
  }
  if (
    irishLatteHot.checked == false &&
    irishLatteCold12.checked == false &&
    irishLatteCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

function darkChocoMoha() {
  var darkChocoMochaHot = document.getElementById("darkChocoMochaHot"),
    darkChocoMochaCold12 = document.getElementById("darkChocoMochaCold12"),
    darkChocoMochaCold16 = document.getElementById("darkChocoMochaCold16"),
    dataName;

  if (darkChocoMochaHot.checked == true) {
    dataName = "Dark Choco Mocha (Hot)";
  }
  if (darkChocoMochaCold12.checked == true) {
    dataName = "Dark Choco Mocha (12oz Cold)";
  }
  if (darkChocoMochaCold16.checked == true) {
    dataName = "Dark Choco Mocha (16oz Cold)";
  }
  if (
    darkChocoMochaHot.checked == false &&
    darkChocoMochaCold12.checked == false &&
    darkChocoMochaCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

function hazelnutLatte() {
  var hazelnutLatteHot = document.getElementById("hazelnutLatteHot"),
    hazelnutLatteCold12 = document.getElementById("hazelnutLatteCold12"),
    hazelnutLatteCold16 = document.getElementById("hazelnutLatteCold16"),
    dataName;

  if (hazelnutLatteHot.checked == true) {
    dataName = "Hazelnut Latte (Hot)";
  }
  if (hazelnutLatteCold12.checked == true) {
    dataName = "Hazelnut Latte (12oz Cold)";
  }
  if (hazelnutLatteCold16.checked == true) {
    dataName = "Hazelnut Latte (16oz Cold)";
  }
  if (
    hazelnutLatteHot.checked == false &&
    hazelnutLatteCold12.checked == false &&
    hazelnutLatteCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

function saltedCaramelMc() {
  var saltedCaramelMcHot = document.getElementById("saltedCaramelMcHot"),
    saltedCaramelMcCold12 = document.getElementById("saltedCaramelMcCold12"),
    saltedCaramelMcCold16 = document.getElementById("saltedCaramelMcCold16"),
    dataName;

  if (saltedCaramelMcHot.checked == true) {
    dataName = "Salted Caramel Macchiato (Hot)";
  }
  if (saltedCaramelMcCold12.checked == true) {
    dataName = "Salted Caramel Macchiato (12oz Cold)";
  }
  if (saltedCaramelMcCold16.checked == true) {
    dataName = "Salted Caramel Macchiato (16oz Cold)";
  }
  if (
    saltedCaramelMcHot.checked == false &&
    saltedCaramelMcCold12.checked == false &&
    saltedCaramelMcCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}
function icedOreoBomb() {
  var icedOreoBombCold12 = document.getElementById("icedOreoBombCold12"),
    icedOreoBombCold16 = document.getElementById("icedOreoBombCold16"),
    dataName;

  if (icedOreoBombCold12.checked == true) {
    dataName = "Iced Oreo Bomb (12oz Cold)";
  }
  if (icedOreoBombCold16.checked == true) {
    dataName = "Iced Oreo Bomb (16oz Cold)";
  }
  if (
    icedOreoBombCold12.checked == false &&
    icedOreoBombCold16.checked == false
  ) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let drinksResult = drinksList.every(function (res) {
      return res != dataName;
    });
    if (drinksResult == true) {
      drinksOrder = drinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

// frappes
let frappesList = JSON.parse(sessionStorage.getItem("Frappes")) || [];
let frappesOrder;

function frappesArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let frappesResult = frappesList.every(function (res) {
    return res != dataName;
  });

  if (frappesResult == true) {
    frappesOrder = frappesList.push(dataName);
    allOrdertosessionStorage();

    alert("The item called " + dataName + " has been included in the list.");
  } else {
    alert("The item " + dataName + " has already been included in the list");
  }
}

// smoothies
let smoothiesList = JSON.parse(sessionStorage.getItem("Smoothies")) || [];
let smoothiesOrder;

function smoothiesArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let smoothiesResult = smoothiesList.every(function (res) {
    return res != dataName;
  });

  if (smoothiesResult == true) {
    smoothiesOrder = smoothiesList.push(dataName);
    allOrdertosessionStorage();

    alert("The item called " + dataName + " has been included in the list.");
  } else {
    alert("The item " + dataName + " has already been included in the list");
  }
}

// flavoredDrinks
let flavoredDrinksList =
  JSON.parse(sessionStorage.getItem("Flavored Drinks")) || [];
let flavoredDrinksOrder;

function flavoredDrinksArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let flavoredDrinksResult = flavoredDrinksList.every(function (res) {
    return res != dataName;
  });

  if (flavoredDrinksResult == true) {
    flavoredDrinksOrder = flavoredDrinksList.push(dataName);
    allOrdertosessionStorage();

    alert("The item called " + dataName + " has been included in the list.");
  } else {
    alert("The item " + dataName + " has already been included in the list");
  }
}

// otherDrinks
let otherDrinksList = JSON.parse(sessionStorage.getItem("Other Drinks")) || [];
let otherDrinksOrder;

function otherDrinksArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let otherDrinksResult = otherDrinksList.every(function (res) {
    return res != dataName;
  });

  if (otherDrinksResult == true) {
    otherDrinksOrder = otherDrinksList.push(dataName);
    allOrdertosessionStorage();

    alert("The item called " + dataName + " has been included in the list.");
  } else {
    alert("The item " + dataName + " has already been included in the list");
  }
}
function calamansiJuice() {
  var calamsiHot = document.getElementById("calamansiJuiceHot"),
    calamansiCold = document.getElementById("calamansiJuiceCold"),
    dataName;

  if (calamsiHot.checked == true) {
    dataName = "Fresh Calamansi Juice (Hot)";
  }
  if (calamansiCold.checked == true) {
    dataName = "Fresh Calamansi Juice (Cold)";
  }
  if (calamsiHot.checked == false && calamansiCold.checked == false) {
    alert(
      "Please ensure that the checkbox is selected before proceeding with your order."
    );
  }

  if (dataName != null) {
    let otherDrinksResult = otherDrinksList.every(function (res) {
      return res != dataName;
    });

    if (otherDrinksResult == true) {
      otherDrinksOrder = otherDrinksList.push(dataName);
      allOrdertosessionStorage();

      alert("The item called " + dataName + " has been included in the list.");
    } else {
      alert("The item " + dataName + " has already been included in the list");
    }
  }
}

// groupMeal
let groupMealList = JSON.parse(sessionStorage.getItem("Group Meal")) || [];
let groupMealOrder;

function groupMealArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let groupMealResult = groupMealList.every(function (res) {
    return res != dataName;
  });

  if (groupMealResult == true) {
    groupMealOrder = groupMealList.push(dataName);
    allOrdertosessionStorage();

    alert("The dish called " + dataName + " has been included in the list.");
  } else {
    alert("The dish " + dataName + " has already been included in the list");
  }
}

// snackPackage
let snackPackageList =
  JSON.parse(sessionStorage.getItem("Snack Package")) || [];
let snackPackageOrder;

function snackPackageArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let snackPackageResult = snackPackageList.every(function (res) {
    return res != dataName;
  });

  if (snackPackageResult == true) {
    snackPackageOrder = snackPackageList.push(dataName);
    allOrdertosessionStorage();

    alert("The package called " + dataName + " has been included in the list.");
  } else {
    alert("The package " + dataName + " has already been included in the list");
  }
}

// beerPackage
let beerPackageList = JSON.parse(sessionStorage.getItem("Beer Package")) || [];
let beerPackageOrder;

function beerPackageArray(clicked_object) {
  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  let beerPackageResult = beerPackageList.every(function (res) {
    return res != dataName;
  });

  if (beerPackageResult == true) {
    beerPackageOrder = beerPackageList.push(dataName);
    allOrdertosessionStorage();

    alert("The package called " + dataName + " has been included in the list.");
  } else {
    alert("The package " + dataName + " has already been included in the list");
  }
}

// Tally Order
window.addEventListener("load", () => {
  var path = window.location.pathname;
  var page = path.split("/").pop();

  if (page != "listed-order.php") {
    addCartNumber();
  }
  switch (page) {
    case "listed-order.php":
      addCartNumber();

      var orderList = document.getElementById("orderListTop");
      orderList.style.display = "none";

      if (orderNumTotal != 0) {
        document.getElementById("messageNull").style.display = "none";
      } else {
        document.getElementById("messageNull").style.display = "flex";
        document.getElementById("doneBtnDiv").style.display = "none";
        document.getElementById("subTitle").style.display = "none";
      }

      // for the button in list of order page

      let myButton = document.getElementById("doneBtnDiv");

      myButton.addEventListener("click", function (event) {
        let keyName = event.target.dataset.key;

        if (keyName == "done") {
          setTimeout(() => {
            let btnQty = document.getElementsByClassName("qty-button");
            let titleQty = document.getElementsByClassName("Q-title");

            document.getElementById("qtyTitle").style.marginBottom = "2rem";

            for (let i = 0; i < btnQty.length; i++) {
              btnQty[i].style.display = "none";
            }
            for (let i = 0; i < titleQty.length; i++) {
              titleQty[i].style.display = "none";
            }
            // adjust the font and line height
            const qtyLi = document.querySelectorAll(".qtyLi");

            qtyLi.forEach((qtyLi) => {
              qtyLi.style.fontSize = "1.05rem";
              qtyLi.style.lineHeight = "2.4rem";
              qtyLi.style.listStyleType = "square";
            });

            // removing subtitle that includes the quantity
            document.getElementById("subTitle").style.display = "none";

            event.target.textContent = "Edit";
            event.target.style.backgroundColor = "#e7a651";
            event.target.style.borderColor = "transparent";
            event.target.dataset.key = "edit";
          }, 200);
        } else if (keyName == "edit") {
          let btnQty = document.getElementsByClassName("qty-button");
          let titleQty = document.getElementsByClassName("Q-title");

          // removing subtitle that includes the quantity
          document.getElementById("subTitle").style.display = "inline-block";
          document.getElementById("subTitle").style.marginBottom = "0rem";

          for (let i = 0; i < btnQty.length; i++) {
            btnQty[i].style.display = "block";
          }
          for (let i = 0; i < titleQty.length; i++) {
            titleQty[i].style.display = "block";
          }
          // adjust the font and line height
          const qtyLi = document.querySelectorAll(".qtyLi");

          qtyLi.forEach((qtyLi) => {
            qtyLi.style.fontSize = "0.9rem";
            qtyLi.style.lineHeight = "2rem";
            qtyLi.style.listStyleType = "none";
          });

          setTimeout(() => {
            event.target.textContent = "Done";
            event.target.style.backgroundColor = "#f3a82d";
            event.target.dataset.key = "done";
          }, 200);
        }
      });

      // declaring variables
      // starter
      var starterorders = JSON.parse(sessionStorage.getItem("Starter")),
        sortedArr = [],
        count = 1,
        // soup
        soupOrders = JSON.parse(sessionStorage.getItem("Soup")),
        // special rice
        spRiceOrders = JSON.parse(sessionStorage.getItem("Special Rice")),
        // beef
        beefOrdersList = JSON.parse(sessionStorage.getItem("Beef")),
        // seafood
        seaListOrder = JSON.parse(sessionStorage.getItem("Seafood")),
        // chicken
        chikListOrder = JSON.parse(sessionStorage.getItem("Chicken")),
        // salad
        saladListOrder = JSON.parse(sessionStorage.getItem("Salad")),
        // salad
        porkListOrder = JSON.parse(sessionStorage.getItem("Pork")),
        // veges
        vegesListOrder = JSON.parse(sessionStorage.getItem("Vegetable")),
        // dessert
        dessertListOrder = JSON.parse(sessionStorage.getItem("Dessert")),
        // dessert
        allDayBListOrder = JSON.parse(
          sessionStorage.getItem("All Day Breakfast")
        ),
        // pizza
        pizzaListOrder = JSON.parse(sessionStorage.getItem("Pizza")),
        // burger
        burgerListOrder = JSON.parse(sessionStorage.getItem("Burger")),
        // pasta
        pastaListOrder = JSON.parse(sessionStorage.getItem("Pasta")),
        // bread
        breadListOrder = JSON.parse(sessionStorage.getItem("Bread")),
        // sandwich
        sandwichListOrder = JSON.parse(sessionStorage.getItem("Sandwich")),
        // noodles
        noodlesListOrder = JSON.parse(sessionStorage.getItem("Noodles")),
        // bilao
        bilaoListOrder = JSON.parse(sessionStorage.getItem("Bilao")),
        // drinks
        drinksListOrder = JSON.parse(sessionStorage.getItem("Drinks")),
        // frappes
        frappesListOrder = JSON.parse(sessionStorage.getItem("Frappes")),
        // smoothies
        smoothiesListOrder = JSON.parse(sessionStorage.getItem("Smoothies")),
        // flavored Drinks
        flavoredDrinksListOrder = JSON.parse(
          sessionStorage.getItem("Flavored Drinks")
        ),
        // other drinks
        otherDrinksListOrder = JSON.parse(
          sessionStorage.getItem("Other Drinks")
        ),
        // group meal
        groupMealListOrder = JSON.parse(sessionStorage.getItem("Group Meal")),
        // snack package
        snackPackageListOrder = JSON.parse(
          sessionStorage.getItem("Snack Package")
        ),
        // snack package
        beerPackageListOrder = JSON.parse(
          sessionStorage.getItem("Beer Package")
        );

      // starter condition
      if (starterorders != null) {
        sortedArr = starterorders.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }

          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("starterQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "starter" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "starter" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }

        // change the diplay
        document.getElementById("starterListQ").style.display = "block";
      }
      // soup condition
      if (soupOrders != null) {
        sortedArr = soupOrders.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }

          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("soupQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "soup" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "soup" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }

        document.getElementById("soupListQ").style.display = "block";
      }
      // special rice condition
      if (spRiceOrders != null) {
        sortedArr = spRiceOrders.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("spRiceQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "special-rice" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "special-rice" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("spRiceListQ").style.display = "block";
      }

      // beef
      if (beefOrdersList != null) {
        sortedArr = beefOrdersList.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("beefQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "beef" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "beef" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("beefListQ").style.display = "block";
      }

      // seafood
      if (seaListOrder != null) {
        sortedArr = seaListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("seafoodQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "seafood" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "seafood" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("seafoodListQ").style.display = "block";
      }

      // chicken
      if (chikListOrder != null) {
        sortedArr = chikListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("chickenQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "chicken" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "chicken" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("chickenListQ").style.display = "block";
      }
      // salad
      if (saladListOrder != null) {
        sortedArr = saladListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("saladQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "salad" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "salad" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("saladListQ").style.display = "block";
      }
      // pork
      if (porkListOrder != null) {
        sortedArr = porkListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("porkQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "pork" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "pork" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("porkListQ").style.display = "block";
      }

      // veges
      if (vegesListOrder != null) {
        sortedArr = vegesListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("vegesQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "veges" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "veges" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("vegesListQ").style.display = "block";
      }

      // dessert
      if (dessertListOrder != null) {
        sortedArr = dessertListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("dessertQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "dessert" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "dessert" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("dessertListQ").style.display = "block";
      }

      // all day breakfast
      if (allDayBListOrder != null) {
        sortedArr = allDayBListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("allDayBQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "allDayB" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "allDayB" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("allDayBListQ").style.display = "block";
      }

      // pizza
      if (pizzaListOrder != null) {
        sortedArr = pizzaListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("pizzaQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "pizza" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "pizza" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("pizzaListQ").style.display = "block";
      }

      // burger
      if (burgerListOrder != null) {
        sortedArr = burgerListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("burgerQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "burger" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "burger" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("burgerListQ").style.display = "block";
      }

      // pasta
      if (pastaListOrder != null) {
        sortedArr = pastaListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("pastaQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "pasta" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "pasta" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("pastaListQ").style.display = "block";
      }

      // bread
      if (breadListOrder != null) {
        sortedArr = breadListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("breadQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "bread" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "bread" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("breadListQ").style.display = "block";
      }

      // sandwich
      if (sandwichListOrder != null) {
        sortedArr = sandwichListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("sandwichQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "sandwich" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "sandwich" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("sandwichListQ").style.display = "block";
      }
      // noodles
      if (noodlesListOrder != null) {
        sortedArr = noodlesListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("noodlesQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "noodles" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "noodles" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("noodlesListQ").style.display = "block";
      }

      // bilao
      if (bilaoListOrder != null) {
        sortedArr = bilaoListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("bilaoQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "bilao" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "bilao" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("bilaoListQ").style.display = "block";
      }

      // drinks
      if (drinksListOrder != null) {
        sortedArr = drinksListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("drinksQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "drinks" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "drinks" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("drinksListQ").style.display = "block";
      }

      // frappes
      if (frappesListOrder != null) {
        sortedArr = frappesListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("frappesQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "frappes" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "frappes" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("frappesListQ").style.display = "block";
      }

      // smoothies
      if (smoothiesListOrder != null) {
        sortedArr = smoothiesListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("smoothiesQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "smoothies" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "smoothies" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("smoothiesListQ").style.display = "block";
      }

      // flavored drinks
      if (flavoredDrinksListOrder != null) {
        sortedArr = flavoredDrinksListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("flavoredDrinksQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "flavoredDrinks" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "flavoredDrinks" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("flavoredDrinksListQ").style.display = "block";
      }

      // other drinks
      if (otherDrinksListOrder != null) {
        sortedArr = otherDrinksListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("otherDrinksQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "otherDrinks" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "otherDrinks" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("otherDrinksListQ").style.display = "block";
      }

      // group meal
      if (groupMealListOrder != null) {
        sortedArr = groupMealListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("groupMealQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "groupMeal" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "groupMeal" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("groupMealListQ").style.display = "block";
      }

      // snack package
      if (snackPackageListOrder != null) {
        sortedArr = snackPackageListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("snackPackageQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "snackPackage" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "snackPackage" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("snackPackageListQ").style.display = "block";
      }

      //  beer package
      if (beerPackageListOrder != null) {
        sortedArr = beerPackageListOrder.sort();

        for (var i = 0; i < sortedArr.length; i = i + count) {
          count = 1;
          for (var j = i + 1; j < sortedArr.length; j++) {
            if (sortedArr[i] === sortedArr[j]) {
              count++;
            }
          }
          // remove space to store in dataname
          var convertName = sortedArr[i];
          convertName = convertName.replace(/\s+/g, "-");

          // setting the array with delete button
          document.getElementById("beerPackageQ").innerHTML +=
            "<li class='qtyLi'><span id='count-" +
            convertName +
            "'>" +
            count +
            "</span> " +
            sortedArr[i] +
            '<button class="add-qty-btn qty-button" data-name = ' +
            convertName +
            ' key-name = "beerPackage" onClick="QuantityAdd(this)" ><i class="fa-solid fa-plus plus-icon-qty"></i></button><button class="delete-qty-btn qty-button" data-name = ' +
            convertName +
            '  key-name = "beerPackage" onClick="QuantityDelete(this)" ><i class="fa-solid fa-minus trash-icon-qty"></i></button></li>';
        }
        // need this to appear the listed arrays
        document.getElementById("beerPackageListQ").style.display = "block";
      }

      // display none the title if null array
      if (spRiceOrders == null || spRiceOrders.length === 0) {
        document.getElementById("spRiceListQ").style.display = "none";
      }
      if (soupOrders == null || soupOrders.length === 0) {
        document.getElementById("soupListQ").style.display = "none";
      }
      if (starterorders == null || starterorders.length === 0) {
        document.getElementById("starterListQ").style.display = "none";
      }
      if (beefOrdersList == null || beefOrdersList.length === 0) {
        document.getElementById("beefListQ").style.display = "none";
      }
      if (seaListOrder == null || seaListOrder.length === 0) {
        document.getElementById("seafoodListQ").style.display = "none";
      }
      if (chikListOrder == null || chikListOrder.length === 0) {
        document.getElementById("chickenListQ").style.display = "none";
      }
      if (saladListOrder == null || saladListOrder.length === 0) {
        document.getElementById("saladListQ").style.display = "none";
      }
      if (porkListOrder == null || porkListOrder.length === 0) {
        document.getElementById("porkListQ").style.display = "none";
      }
      if (vegesListOrder == null || vegesListOrder.length === 0) {
        document.getElementById("vegesListQ").style.display = "none";
      }
      if (dessertListOrder == null || dessertListOrder.length === 0) {
        document.getElementById("dessertListQ").style.display = "none";
      }
      if (allDayBListOrder == null || allDayBListOrder.length === 0) {
        document.getElementById("allDayBListQ").style.display = "none";
      }
      if (pizzaListOrder == null || pizzaListOrder.length === 0) {
        document.getElementById("pizzaListQ").style.display = "none";
      }
      if (burgerListOrder == null || burgerListOrder.length === 0) {
        document.getElementById("burgerListQ").style.display = "none";
      }
      if (pastaListOrder == null || pastaListOrder.length === 0) {
        document.getElementById("pastaListQ").style.display = "none";
      }
      if (breadListOrder == null || breadListOrder.length === 0) {
        document.getElementById("breadListQ").style.display = "none";
      }
      if (sandwichListOrder == null || sandwichListOrder.length === 0) {
        document.getElementById("sandwichListQ").style.display = "none";
      }
      if (noodlesListOrder == null || noodlesListOrder.length === 0) {
        document.getElementById("noodlesListQ").style.display = "none";
      }
      if (bilaoListOrder == null || bilaoListOrder.length === 0) {
        document.getElementById("bilaoListQ").style.display = "none";
      }
      if (drinksListOrder == null || drinksListOrder.length === 0) {
        document.getElementById("drinksListQ").style.display = "none";
      }
      if (frappesListOrder == null || frappesListOrder.length === 0) {
        document.getElementById("frappesListQ").style.display = "none";
      }
      if (smoothiesListOrder == null || smoothiesListOrder.length === 0) {
        document.getElementById("smoothiesListQ").style.display = "none";
      }
      if (
        flavoredDrinksListOrder == null ||
        flavoredDrinksListOrder.length === 0
      ) {
        document.getElementById("flavoredDrinksListQ").style.display = "none";
      }
      if (otherDrinksListOrder == null || otherDrinksListOrder.length === 0) {
        document.getElementById("otherDrinksListQ").style.display = "none";
      }
      if (groupMealListOrder == null || groupMealListOrder.length === 0) {
        document.getElementById("groupMealListQ").style.display = "none";
      }
      if (snackPackageListOrder == null || snackPackageListOrder.length === 0) {
        document.getElementById("snackPackageListQ").style.display = "none";
      }
      if (beerPackageListOrder == null || beerPackageListOrder.length === 0) {
        document.getElementById("beerPackageListQ").style.display = "none";
      }
      break;
  }
});

// deleting array
function QuantityDelete(clicked_object) {
  // declare the string needed to delete item

  // starter
  var starterorders = JSON.parse(sessionStorage.getItem("Starter")),
    // soup
    soupOrders = JSON.parse(sessionStorage.getItem("Soup")),
    // special rice
    spRiceOrders = JSON.parse(sessionStorage.getItem("Special Rice")),
    // beef
    beefOrdersList = JSON.parse(sessionStorage.getItem("Beef")),
    // seafood
    seaListOrder = JSON.parse(sessionStorage.getItem("Seafood")),
    // chicken
    chikListOrder = JSON.parse(sessionStorage.getItem("Chicken")),
    // salad
    saladListOrder = JSON.parse(sessionStorage.getItem("Salad")),
    // pork
    porkListOrder = JSON.parse(sessionStorage.getItem("Pork")),
    // veges
    vegesListOrder = JSON.parse(sessionStorage.getItem("Vegetable")),
    // dessert
    dessertListOrder = JSON.parse(sessionStorage.getItem("Dessert")),
    // all day breakfast
    allDayBListOrder = JSON.parse(sessionStorage.getItem("All Day Breakfast")),
    // pizza
    pizzaListOrder = JSON.parse(sessionStorage.getItem("Pizza")),
    // burger
    burgerListOrder = JSON.parse(sessionStorage.getItem("Burger")),
    // pasta
    pastaListOrder = JSON.parse(sessionStorage.getItem("Pasta")),
    // bread
    breadListOrder = JSON.parse(sessionStorage.getItem("Bread")),
    // sandwich
    sandwichListOrder = JSON.parse(sessionStorage.getItem("Sandwich")),
    // noodles
    noodlesListOrder = JSON.parse(sessionStorage.getItem("Noodles")),
    // bilao
    bilaoListOrder = JSON.parse(sessionStorage.getItem("Bilao")),
    // drinks
    drinksListOrder = JSON.parse(sessionStorage.getItem("Drinks")),
    // frappes
    frappesListOrder = JSON.parse(sessionStorage.getItem("Frappes")),
    // smoothies
    smoothiesListOrder = JSON.parse(sessionStorage.getItem("Smoothies")),
    // Flavored Drinks
    flavoredDrinksListOrder = JSON.parse(
      sessionStorage.getItem("Flavored Drinks")
    ),
    // Other Drinks
    otherDrinksListOrder = JSON.parse(sessionStorage.getItem("Other Drinks")),
    // Group Meal
    groupMealListOrder = JSON.parse(sessionStorage.getItem("Group Meal")),
    // snack package
    snackPackageListOrder = JSON.parse(sessionStorage.getItem("Snack Package")),
    // beer package
    beerPackageListOrder = JSON.parse(sessionStorage.getItem("Beer Package"));

  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");
  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  var keyName = clicked_object.getAttribute("key-name");

  // checking the key name to properly selecy the key in local storage
  switch (keyName) {
    case "starter":
      if (starterorders.includes(dataName)) {
        starterorders.splice(starterorders.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Starter", JSON.stringify(starterorders));
      break;
    case "soup":
      // condition for deleting the same
      if (soupOrders.includes(dataName)) {
        soupOrders.splice(soupOrders.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Soup", JSON.stringify(soupOrders));
      break;
    case "special-rice":
      // condition for deleting the same
      if (spRiceOrders.includes(dataName)) {
        spRiceOrders.splice(spRiceOrders.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Special Rice",
        JSON.stringify(spRiceOrders)
      );
      break;
    case "beef":
      // condition for deleting the same
      if (beefOrdersList.includes(dataName)) {
        beefOrdersList.splice(beefOrdersList.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Beef", JSON.stringify(beefOrdersList));
      break;
    case "seafood":
      // condition for deleting the same
      if (seaListOrder.includes(dataName)) {
        seaListOrder.splice(seaListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Seafood", JSON.stringify(seaListOrder));
      break;
    case "chicken":
      // condition for deleting the same
      if (chikListOrder.includes(dataName)) {
        chikListOrder.splice(chikListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Chicken", JSON.stringify(chikListOrder));
      break;
    case "salad":
      // condition for deleting the same
      if (saladListOrder.includes(dataName)) {
        saladListOrder.splice(saladListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Salad", JSON.stringify(saladListOrder));
      break;
    case "pork":
      // condition for deleting the same
      if (porkListOrder.includes(dataName)) {
        porkListOrder.splice(porkListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Pork", JSON.stringify(porkListOrder));
      break;
    case "veges":
      // condition for deleting the same
      if (vegesListOrder.includes(dataName)) {
        vegesListOrder.splice(vegesListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Vegetable",
        JSON.stringify(vegesListOrder)
      );
      break;
    case "dessert":
      // condition for deleting the same
      if (dessertListOrder.includes(dataName)) {
        dessertListOrder.splice(dessertListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Dessert",
        JSON.stringify(dessertListOrder)
      );
      break;
    case "allDayB":
      // condition for deleting the same
      if (allDayBListOrder.includes(dataName)) {
        allDayBListOrder.splice(allDayBListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "All Day Breakfast",
        JSON.stringify(allDayBListOrder)
      );
      break;
    case "pizza":
      // condition for deleting the same
      if (pizzaListOrder.includes(dataName)) {
        pizzaListOrder.splice(pizzaListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Pizza", JSON.stringify(pizzaListOrder));
      break;
    case "burger":
      // condition for deleting the same
      if (burgerListOrder.includes(dataName)) {
        burgerListOrder.splice(burgerListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Burger", JSON.stringify(burgerListOrder));
      break;
    case "pasta":
      // condition for deleting the same
      if (pastaListOrder.includes(dataName)) {
        pastaListOrder.splice(pastaListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Pasta", JSON.stringify(pastaListOrder));
      break;
    case "bread":
      // condition for deleting the same
      if (breadListOrder.includes(dataName)) {
        breadListOrder.splice(breadListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Bread", JSON.stringify(breadListOrder));
      break;
    case "sandwich":
      // condition for deleting the same
      if (sandwichListOrder.includes(dataName)) {
        sandwichListOrder.splice(sandwichListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Sandwich",
        JSON.stringify(sandwichListOrder)
      );
      break;
    case "noodles":
      // condition for deleting the same
      if (noodlesListOrder.includes(dataName)) {
        noodlesListOrder.splice(noodlesListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Noodles",
        JSON.stringify(noodlesListOrder)
      );
      break;
    case "bilao":
      // condition for deleting the same
      if (bilaoListOrder.includes(dataName)) {
        bilaoListOrder.splice(bilaoListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Bilao", JSON.stringify(bilaoListOrder));
      break;
    case "drinks":
      // condition for deleting the same
      if (drinksListOrder.includes(dataName)) {
        drinksListOrder.splice(drinksListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem("Drinks", JSON.stringify(drinksListOrder));
      break;
    case "frappes":
      // condition for deleting the same
      if (frappesListOrder.includes(dataName)) {
        frappesListOrder.splice(frappesListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Frappes",
        JSON.stringify(frappesListOrder)
      );
      break;
    case "smoothies":
      // condition for deleting the same
      if (smoothiesListOrder.includes(dataName)) {
        smoothiesListOrder.splice(smoothiesListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Smoothies",
        JSON.stringify(smoothiesListOrder)
      );
      break;
    case "flavoredDrinks":
      // condition for deleting the same
      if (flavoredDrinksListOrder.includes(dataName)) {
        flavoredDrinksListOrder.splice(
          flavoredDrinksListOrder.indexOf(dataName),
          1
        );
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Flavored Drinks",
        JSON.stringify(flavoredDrinksListOrder)
      );
      break;
    case "otherDrinks":
      // condition for deleting the same
      if (otherDrinksListOrder.includes(dataName)) {
        otherDrinksListOrder.splice(otherDrinksListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Other Drinks",
        JSON.stringify(otherDrinksListOrder)
      );
      break;
    case "groupMeal":
      // condition for deleting the same
      if (groupMealListOrder.includes(dataName)) {
        groupMealListOrder.splice(groupMealListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Group Meal",
        JSON.stringify(groupMealListOrder)
      );
      break;
    case "snackPackage":
      // condition for deleting the same
      if (snackPackageListOrder.includes(dataName)) {
        snackPackageListOrder.splice(
          snackPackageListOrder.indexOf(dataName),
          1
        );
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Snack Package",
        JSON.stringify(snackPackageListOrder)
      );
      break;
    case "beerPackage":
      // condition for deleting the same
      if (beerPackageListOrder.includes(dataName)) {
        beerPackageListOrder.splice(beerPackageListOrder.indexOf(dataName), 1);
      }

      // set the new array that will store in local storage
      window.sessionStorage.setItem(
        "Beer Package",
        JSON.stringify(beerPackageListOrder)
      );
      break;
  }

  // visual minus span
  dataName = dataName.replace(/\s+/g, "-");
  var spanElement = document.getElementById("count-" + dataName);
  // process of decreasing quantity
  var currentValue = parseInt(spanElement.textContent);
  if (currentValue <= 1) {
    // reload
    location.reload();
    return false;
  } else {
    var newValue = currentValue - 1;
  }

  // Set the new value of the span element
  spanElement.textContent = newValue;
}

// adding array
function QuantityAdd(clicked_object) {
  // declare the stirng array from local storage

  // starter
  let starterList = JSON.parse(sessionStorage.getItem("Starter")) || [];
  let starterOrder;
  // soup
  let soupList = JSON.parse(sessionStorage.getItem("Soup")) || [];
  let soupOrder;
  // special rice
  let sRiceList = JSON.parse(sessionStorage.getItem("Special Rice"));
  let sRiceOrder;
  // beef
  let beefList = JSON.parse(sessionStorage.getItem("Beef")) || [];
  let beefOrder;
  // seafood
  let seafoodList = JSON.parse(sessionStorage.getItem("Seafood")) || [];
  let seafoodOrder;
  // chicken
  let chickenList = JSON.parse(sessionStorage.getItem("Chicken")) || [];
  let chickenOrder;
  // salad
  let saladList = JSON.parse(sessionStorage.getItem("Salad")) || [];
  let saladOrder;
  // pork
  let porkList = JSON.parse(sessionStorage.getItem("Pork")) || [];
  let porkOrder;
  // veges
  let vegesList = JSON.parse(sessionStorage.getItem("Vegetable")) || [];
  let vegesOrder;
  // veges
  let dessertList = JSON.parse(sessionStorage.getItem("Dessert")) || [];
  let dessertOrder;
  // all day breakfast
  let allDayBList =
    JSON.parse(sessionStorage.getItem("All Day Breakfast")) || [];
  let allDayBOrder;
  // pizza
  let pizzaList = JSON.parse(sessionStorage.getItem("Pizza")) || [];
  let pizzaOrder;
  // burger
  let burgerList = JSON.parse(sessionStorage.getItem("Burger")) || [];
  let burgerOrder;
  // pasta
  let pastaList = JSON.parse(sessionStorage.getItem("Pasta")) || [];
  let pastaOrder;
  // bread
  let breadList = JSON.parse(sessionStorage.getItem("Bread")) || [];
  let breadOrder;
  // sandwich
  let sandwichList = JSON.parse(sessionStorage.getItem("Sandwich")) || [];
  let sandwichOrder;
  // noodles
  let noodlesList = JSON.parse(sessionStorage.getItem("Noodles")) || [];
  let noodlesOrder;
  // bilao
  let bilaoList = JSON.parse(sessionStorage.getItem("Bilao")) || [];
  let bilaoOrder;
  // drinks
  let drinksList = JSON.parse(sessionStorage.getItem("Drinks")) || [];
  let drinksOrder;
  // frappes
  let frappesList = JSON.parse(sessionStorage.getItem("Frappes")) || [];
  let frappesOrder;
  // smoothies
  let smoothiesList = JSON.parse(sessionStorage.getItem("Smoothies")) || [];
  let smoothiesOrder;
  // flavored drinks
  let flavoredDrinksList =
    JSON.parse(sessionStorage.getItem("Flavored Drinks")) || [];
  let flavoredDrinksOrder;
  // other drinks
  let otherDrinksList =
    JSON.parse(sessionStorage.getItem("Other Drinks")) || [];
  let otherDrinksOrder;
  // group Meal
  let groupMealList = JSON.parse(sessionStorage.getItem("Group Meal")) || [];
  let groupMealOrder;
  // snack package
  let snackPackageList =
    JSON.parse(sessionStorage.getItem("Snack Package")) || [];
  let snackPackageOrder;
  // beer
  let beerPackageList =
    JSON.parse(sessionStorage.getItem("Beer Package")) || [];
  let beerPackageOrder;

  // get attribute from button delete
  var dataName = clicked_object.getAttribute("data-name");

  // revert the sapaces in dataname
  dataName = dataName.replace(/-/g, " ");

  var keyName = clicked_object.getAttribute("key-name");

  // checking the key name to properly selecy the key in local storage
  switch (keyName) {
    case "starter":
      starterOrder = starterList.push(dataName);
      window.sessionStorage.setItem("Starter", JSON.stringify(starterList));
      break;
    case "soup":
      soupOrder = soupList.push(dataName);
      window.sessionStorage.setItem("Soup", JSON.stringify(soupList));
      break;
    case "special-rice":
      sRiceOrder = sRiceList.push(dataName);
      window.sessionStorage.setItem("Special Rice", JSON.stringify(sRiceList));
      break;
    case "beef":
      beefOrder = beefList.push(dataName);
      window.sessionStorage.setItem("Beef", JSON.stringify(beefList));
      break;
    case "seafood":
      seafoodOrder = seafoodList.push(dataName);
      window.sessionStorage.setItem("Seafood", JSON.stringify(seafoodList));
      break;
    case "chicken":
      chickenOrder = chickenList.push(dataName);
      window.sessionStorage.setItem("Chicken", JSON.stringify(chickenList));
      break;
    case "salad":
      saladOrder = saladList.push(dataName);
      window.sessionStorage.setItem("Salad", JSON.stringify(saladList));
      break;
    case "pork":
      porkOrder = porkList.push(dataName);
      window.sessionStorage.setItem("Pork", JSON.stringify(porkList));
      break;
    case "veges":
      vegesOrder = vegesList.push(dataName);
      window.sessionStorage.setItem("Vegetable", JSON.stringify(vegesList));
      break;
    case "dessert":
      dessertOrder = dessertList.push(dataName);
      window.sessionStorage.setItem("Dessert", JSON.stringify(dessertList));
      break;
    case "allDayB":
      allDayBOrder = allDayBList.push(dataName);
      window.sessionStorage.setItem(
        "All Day Breakfast",
        JSON.stringify(allDayBList)
      );
      break;
    case "pizza":
      pizzaOrder = pizzaList.push(dataName);
      window.sessionStorage.setItem("Pizza", JSON.stringify(pizzaList));
      break;
    case "burger":
      burgerOrder = burgerList.push(dataName);
      window.sessionStorage.setItem("Burger", JSON.stringify(burgerList));
      break;
    case "pasta":
      pastaOrder = pastaList.push(dataName);
      window.sessionStorage.setItem("Pasta", JSON.stringify(pastaList));
      break;
    case "bread":
      breadOrder = breadList.push(dataName);
      window.sessionStorage.setItem("Bread", JSON.stringify(breadList));
      break;
    case "sandwich":
      sandwichOrder = sandwichList.push(dataName);
      window.sessionStorage.setItem("Sandwich", JSON.stringify(sandwichList));
      break;
    case "noodles":
      noodlesOrder = noodlesList.push(dataName);
      window.sessionStorage.setItem("Noodles", JSON.stringify(noodlesList));
      break;
    case "bilao":
      bilaoOrder = bilaoList.push(dataName);
      window.sessionStorage.setItem("Bilao", JSON.stringify(bilaoList));
      break;
    case "drinks":
      drinksOrder = drinksList.push(dataName);
      window.sessionStorage.setItem("Drinks", JSON.stringify(drinksList));
      break;
    case "frappes":
      frappesOrder = frappesList.push(dataName);
      window.sessionStorage.setItem("Frappes", JSON.stringify(frappesList));
      break;
    case "smoothies":
      smoothiesOrder = smoothiesList.push(dataName);
      window.sessionStorage.setItem("Smoothies", JSON.stringify(smoothiesList));
      break;
    case "flavoredDrinks":
      flavoredDrinksOrder = flavoredDrinksList.push(dataName);
      window.sessionStorage.setItem(
        "Flavored Drinks",
        JSON.stringify(flavoredDrinksList)
      );
      break;
    case "otherDrinks":
      otherDrinksOrder = otherDrinksList.push(dataName);
      window.sessionStorage.setItem(
        "Other Drinks",
        JSON.stringify(otherDrinksList)
      );
      break;
    case "groupMeal":
      groupMealOrder = groupMealList.push(dataName);
      window.sessionStorage.setItem(
        "Group Meal",
        JSON.stringify(groupMealList)
      );
      break;
    case "snackPackage":
      snackPackageOrder = snackPackageList.push(dataName);
      window.sessionStorage.setItem(
        "Snack Package",
        JSON.stringify(snackPackageList)
      );
      break;
    case "beerPackage":
      beerPackageOrder = beerPackageList.push(dataName);
      window.sessionStorage.setItem(
        "Beer Package",
        JSON.stringify(beerPackageList)
      );
      break;
  }

  // span addition
  dataName = dataName.replace(/\s+/g, "-");
  var spanElement = document.getElementById("count-" + dataName);

  var currentValue = parseInt(spanElement.textContent);
  var newValue = currentValue + 1;

  // Set the new value of the span element
  spanElement.textContent = newValue;
}
function deleteRow(clicked_object) {
  var dataName = clicked_object.getAttribute("data-name");

  window.sessionStorage.removeItem(dataName);
  // reload
  location.reload();
  return false;
}
