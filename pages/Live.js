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

  const [appIsReady, setAppIsReady] = useState(false);
  const [loading, setLoading] = useState(false);
  const [statut, setStatut] = useState(false);

  const [erreur, setErreur] = useState("");
  const [live, setLive] = useState([]);

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
        setLoading(false);
      } 

      if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
        switch (xhr.responseText) {
          case "Affichage des lives échouées":
            setLoading(false);
            setErreur("Affichage des lives échouées");
            break;

          case "Aucun live disponible":
            setLoading(false);
            setErreur("Aucun live disponible");
            break;

          default:
            setLoading(false);
            setErreur("");
            setLive(JSON.parse(xhr.responseText));
            console.log(live);
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
  const url = "https://balezi-group.net/blive/admins/assets/astuce/";

  return (
    <SafeAreaView style={styles.main_container} onLayout={onLayoutRootView}>
      <View style={styles.container} onLayout={onLayoutRootView}>
        <StatusBar
          backgroundColor={"#212429"}
          barStyle={"light-content"}
        ></StatusBar>

        <Header navigation={navigation} route={route} />

        <View>
          <Text
            style={{
              fontFamily: "Outfit_700Bold",
              color: "white",
              fontSize: 25,
              marginTop: 5,
            }}
          >
            Nos lives
          </Text>
        </View>

        <>
          <FlatList
            showsVerticalScrollIndicator={false}
            data={live}
            renderItem={({ item }) => (
              <View
                style={{
                  marginTop: 30,
                  width: "100%",
                  borderBottomWidth: 1,
                  borderBottomColor: "silver",
                  paddingBottom: 20,
                  position: "relative",
                }}
              >
                <Image
                  style={{
                    resizeMode: "cover",
                    height: 200,
                    width: "100%",
                    marginBottom: 10,
                  }}
                  source={{ uri: url+''+item.avatar }}
                />

                <Text
                  style={{
                    fontFamily: "Outfit_500Medium",
                    color: "white",
                    width: "100%",
                    fontSize: 25,
                    marginBottom: 10,
                  }}
                >
                  {item.titre.substring(0, 30)+'...'}
                </Text>

                <Text
                  style={{
                    fontFamily: "Outfit_300Light",
                    color: "white",
                    width: "100%",
                    fontSize: 12,
                  }}
                >
                  {item.contenue.substring(0, 250)}
                </Text>

                <TouchableOpacity
                  style={{
                    position: "absolute",
                    top: 80,
                    left: "44%",
                  }}
                  // onPress={() => setModalVisible(true)}
                  onPress={() =>
                    navigation.navigate("live", { id: item.youtube, titre: item.titre, description: item.contenue  })
                  }
                >
                  <FontAwesome name="youtube-play" size={45} color="red" />
                </TouchableOpacity>
              </View>
            )}
            keyExtractor={(item) => item.id}
            // ListFooterComponent={<BottomFlat />}
          />
        </>
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
    paddingHorizontal: 15,
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
