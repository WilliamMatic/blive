import React, { useCallback, useEffect, useState } from "react";

import {
  StyleSheet,
  View,
  SafeAreaView,
  StatusBar,
  Text,
  TextInput,
  TouchableOpacity,
  Alert,
  ActivityIndicator,
  Image,
  ScrollView,
  Modal,
  FlatList,
} from "react-native";

import {
  Entypo,
  AntDesign,
  FontAwesome5,
  FontAwesome,
  SimpleLineIcons,
  Ionicons,
} from "@expo/vector-icons";

import Header from "../components/Header";
import Live from "../components/Live";
import Recommanded from "../components/Recommanded";

import * as SplashScreen from "expo-splash-screen";
import * as Font from "expo-font";

SplashScreen.preventAutoHideAsync();

import {
  useFonts,
  Outfit_100Thin,
  Outfit_200ExtraLight,
  Outfit_300Light,
  Outfit_400Regular,
  Outfit_500Medium,
  Outfit_600SemiBold,
  Outfit_700Bold,
  Outfit_800ExtraBold,
  Outfit_900Black,
} from "@expo-google-fonts/outfit";

export default function Login({ navigation, route }) {
  let [fontsLoaded] = useFonts({
    Outfit_100Thin,
    Outfit_200ExtraLight,
    Outfit_300Light,
    Outfit_400Regular,
    Outfit_500Medium,
    Outfit_600SemiBold,
    Outfit_700Bold,
    Outfit_800ExtraBold,
    Outfit_900Black,
  });

  let user = route.params.params_user;

  const [appIsReady, setAppIsReady] = useState(false);
  const [loading, setLoading] = useState(false);
  const [statut, setStatut] = useState(false);

  const [feeback, setFeedback] = useState("");
  const [feeback1, setFeedback1] = useState("");
  const [live, setLive] = useState([]);
  const [inlive, setInlive] = useState([]);

  const [modalVisible, setModalVisible] = useState(false);
  const [titre, setTitre] = useState("");
  const [montant, setMontant] = useState("");

  const handleSave = () => {
    // Code pour sauvegarder les données du formulaire
    console.log("Titre:", titre);
    console.log("Montant:", montant);
    // Fermer le modal
    setModalVisible(false);
  };

  useEffect(() => {
    async function prepare() {
      try {
        await SplashScreen.preventAutoHideAsync();
        await Font.loadAsync(Entypo.font);
        await new Promise((resolve) => setTimeout(resolve, 200));
      } catch (e) {
        console.warn(e);
      } finally {
        setAppIsReady(true);
      }
    }

    prepare();
  }, []);

  useEffect(() => {
    setLoading(true);

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://balezi-group.net/blive/models/m_live.php", true);

    xhr.onreadystatechange = function () {
      if (xhr.readyState == 0) {
        setLoading(true);
      }

      if (xhr.readyState == 1) {
        setLoading(true);
      }

      if (xhr.readyState == 2) {
        setLoading(true);
      }

      if (xhr.readyState == 3) {
        setLoading(true);
      }

      if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
        switch (xhr.responseText) {
          case "Affichage des lives échouées":
            setLoading(false);
            setFeedback("Affichage des lives échouées");
            break;

          case "Aucun live disponible":
            setLoading(false);
            setFeedback("Aucun live disponible");
            break;

          default:
            setLoading(false);
            setFeedback("");
            setLive(JSON.parse(xhr.responseText));
        }
      }
    };

    xhr.send(null);
  }, [statut]);

  useEffect(() => {
    setLoading(true);

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://balezi-group.net/blive/models/m_inlive.php", true);

    xhr.onreadystatechange = function () {
      if (xhr.readyState == 0) {
        setLoading(true);
      }

      if (xhr.readyState == 1) {
        setLoading(true);
      }

      if (xhr.readyState == 2) {
        setLoading(true);
      }

      if (xhr.readyState == 3) {
        setLoading(true);
      }

      if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
        switch (xhr.responseText) {
          case "Affichage des lives échouées":
            setLoading(false);
            setFeedback1("Affichage des lives échouées");
            break;

          case "Aucun live disponible":
            setLoading(false);
            setFeedback1("Aucun live disponible");
            break;

          default:
            setLoading(false);
            setFeedback1("");
            setInlive(JSON.parse(xhr.responseText));
        }
      }
    };

    xhr.send(null);
  }, [statut]);

  const onLayoutRootView = useCallback(async () => {
    if (appIsReady) {
      await SplashScreen.hideAsync();
    }
  }, [appIsReady]);

  if (!appIsReady) {
    return null;
  }

  return (
    <SafeAreaView style={styles.main_container} onLayout={onLayoutRootView}>
      <View style={styles.container} onLayout={onLayoutRootView}>
        <StatusBar
          backgroundColor={"#f29304"}
          barStyle={"light-content"}
        ></StatusBar>

        <Header navigation={navigation} route={route} user={user.avatar} />

        <View
          style={{
            paddingHorizontal: 10,
          }}
        >
          <View>
            <Text
              style={{
                fontFamily: "Outfit_700Bold",
                color: "white",
                fontSize: 15,
                marginTop: 15,
              }}
            >
              Regarder maintenant
            </Text>
          </View>
          {feeback.length > 0 ? (
            <Text
              style={{
                fontFamily: "Outfit_400Regular",
                color: "white",
                fontSize: 11,
              }}
            >
              Aucun live pour le moment
            </Text>
          ) : (
            <Live navigation={navigation} route={route} live={live} user={user} />
          )}

          {/* Anciens lives */}
          <View style={{ marginVertical: 25 }}>
            <Text
              style={{
                fontFamily: "Outfit_700Bold",
                color: "white",
                fontSize: 15,
              }}
            >
              Nous vous récommandons
            </Text>
          </View>

          {feeback1.length > 0 ? (
            <Text
              style={{
                fontFamily: "Outfit_400Regular",
                color: "white",
                fontSize: 11,
              }}
            >
              Aucune récommandation pour le moment
            </Text>
          ) : (
            <Recommanded navigation={navigation} route={route} recommanded={inlive} user={user} />
          )}
        </View>
      </View>
      {loading ? (
        <View
          style={{
            position: "absolute",
            top: 0,
            left: 0,
            right: 0,
            bottom: 0,
            backgroundColor: "rgba(255,255,255,0.4)",
            paddingHorizontal: 10,
            justifyContent: "center",
            alignItems: "center",
          }}
        >
          <ActivityIndicator size="large" color="#000" />
        </View>
      ) : null}

      <View>
        <Modal
          animationType="slide"
          transparent={true}
          visible={modalVisible}
          onRequestClose={() => setModalVisible(false)}
        >
          <View style={styles.modalContainer}>
            <View style={styles.modalContent}>
              <Text style={styles.modalTitle}>Formulaire de paiement</Text>
              <TextInput
                style={styles.input}
                placeholder="Titre"
                value={titre}
                onChangeText={(text) => setTitre(text)}
              />
              <TextInput
                style={styles.input}
                placeholder="Montant à payer"
                value={montant}
                onChangeText={(text) => setMontant(text)}
                keyboardType="numeric"
              />
              <TouchableOpacity style={styles.saveButton} onPress={handleSave}>
                <Text style={styles.saveButtonText}>Valider</Text>
              </TouchableOpacity>
            </View>
          </View>
        </Modal>
      </View>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  main_container: {
    flex: 1,
    backgroundColor: "#212429",
  },
  container: {
    flex: 1,
    backgroundColor: "#212429",
  },
  modalContainer: {
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
    backgroundColor: "rgba(0, 0, 0, 0.5)",
  },
  modalContent: {
    backgroundColor: "white",
    padding: 20,
    borderRadius: 10,
    elevation: 5,
    width: "90%",
  },
  modalTitle: {
    fontSize: 18,
    fontWeight: "bold",
    marginBottom: 10,
    fontFamily: "Outfit_600SemiBold",
  },
  input: {
    borderWidth: 1,
    borderColor: "#ccc",
    borderRadius: 5,
    paddingHorizontal: 10,
    paddingVertical: 5,
    marginBottom: 10,
    fontFamily: "Outfit_400Regular",
  },
  saveButton: {
    backgroundColor: "#23536D",
    padding: 10,
    borderRadius: 5,
    alignItems: "center",
  },
  saveButtonText: {
    color: "white",
    fontWeight: "bold",
    fontFamily: "Outfit_400Regular",
  },
});
