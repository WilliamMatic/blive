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

import DateTimePicker from "@react-native-community/datetimepicker";

import * as ImagePicker from "expo-image-picker";
import axios from "axios";

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

  let user = route.params.user;

  const [appIsReady, setAppIsReady] = useState(false);
  const [loading, setLoading] = useState(false);

  const [selectedImage, setSelectedImage] = useState(null);

  const [users, setUsers] = useState([]);

  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const [passwordVisible, setPasswordVisible] = useState(true);
  const [passwordType, setPasswordType] = useState("eye-slash");

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

  const onLayoutRootView = useCallback(async () => {
    if (appIsReady) {
      await SplashScreen.hideAsync();
    }
  }, [appIsReady]);

  if (!appIsReady) {
    return null;
  }

  function UPDATE() {
    if (noms == "") {
      Alert.alert("Echec", "Le nom est obligatoire");
      return;
    }
    if (email == "") {
      Alert.alert("Echec", "L'adresse email est obligatoire");
      return;
    }
    if (country == "") {
      Alert.alert("Echec", "Pays est obligatoire");
      return;
    }
    if (name_country == "") {
      Alert.alert("Echec", "Le pays de résidence est obligatoire");
      return;
    }
    if (date_naisse == "") {
      Alert.alert("Echec", "La date de naissance est obligatoire");
      return;
    }
    if (password == "") {
      Alert.alert("Echec", "Le mot de passe est obligatoire");
      return;
    }
    if (confirm == "") {
      Alert.alert("Echec", "La confirmation du mot de passe est obligatoire");
      return;
    }
    if (adresse == "") {
      Alert.alert("Echec", "L'adresse physique est obligatoire");
      return;
    }
    if (password != confirm) {
      Alert.alert("Echec", "Le deux mot de passe doivent être obligatoire");
      return;
    }
    if (code == "") {
      Alert.alert("Echec", "Le code du pays est obligatoire");
      return;
    }
    if (telephone == "") {
      Alert.alert("Echec", "Le numéro de telephone est obligatoire");
      return;
    }

    var xml = new XMLHttpRequest();
    xml.open(
      "GET",
      "https://sopping-schedulers.000webhostapp.com/models_apis/API_UPDATE_USER.php?user_phone_primary=" +
        telephone +
        "&user_email_primary=" +
        email +
        "&user_full_name=" +
        noms +
        "&user_gender=" +
        date_naisse +
        "&user_phone_country_code=" +
        code +
        "&user_country_residence=" +
        countrys +
        "&user_physical_address=" +
        adresse +
        "&user_country_name_code=" +
        name_country +
        "&password=" +
        password +
        "&user_id=" +
        user.user_id +
        "&pseudo=" +
        user.pseudo +
        "&id=" +
        user.user_id,
      true
    );

    xml.onreadystatechange = function () {
      if (xml.readyState == 0) {
        setLoading(true);
      }

      if (xml.readyState == 1) {
        setLoading(true);
      }

      if (xml.readyState == 2) {
        setLoading(true);
      }

      if (xml.readyState == 3) {
        setLoading(true);
      }

      if (xml.readyState == 4 && (xml.status == 200 || xml.status == 0)) {
        switch (xml.responseText) {
          case "succès":
            setV_msg(false);
            setLoading(false);
            setSuccess(true);

            setTimeout(() => {
              setSuccess(false);
              navigation.navigate("login");
            }, 1500);

            break;

          default:
            setLoading(false);
            Alert.alert("Erreur", xml.responseText);
        }
      }
    };

    xml.send(null);
  }

  const sendDataToMySql = async () => {
    // Envoyez le fichier image au serveur backend où il est sauvegardé dans MySQL

    const { status } = await ImagePicker.requestMediaLibraryPermissionsAsync();
    if (status !== "granted") {
      console.log("La permission est nécessaire pour choisir une image.");
      return;
    }
    const image = await ImagePicker.launchImageLibraryAsync({
      mediaTypes: ImagePicker.MediaTypeOptions.Images,
      quality: 1,
    });
    if (!image.canceled) {
      const { uri } = image.assets[0].uri;
      // await FileSystem.copyAsync({ from: uri, to: "file:///tmp/my-image.jpg" });
      setSelectedImage(image.assets[0].uri);
    } else {
      return;
    }

    setLoading(true);
    const formData = new FormData();
    const fileExtension = image.assets[0].uri.split(".").pop();
    formData.append("photo", {
      uri: image.assets[0].uri,
      type: `image/${fileExtension}`,
      name: `file.${fileExtension}`,
    });
    formData.append("id", user.id);
    const result = await axios.post(
      "https://balezi-group.net/blive/models/ADD_AVATAR.php",
      formData,
      {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      }
    );
    switch (result.data) {
      case "succès":
        setLoading(false);
        Alert.alert("Success", "Avatar ajouté");
        setTimeout(() => {
          navigation.navigate("login");
        }, 1500);
        break;

      default:
        setLoading(false);
        Alert.alert("Echec", result.data);
        break;
    }
  };

  const url = "https://balezi-group.net/blive/admins/assets/avatar/";
  const avatar_cover = "https://balezi-group.net/blive/admins/assets/images/user.png";

  return (
    <SafeAreaView style={styles.main_container} onLayout={onLayoutRootView}>
      <View style={styles.container} onLayout={onLayoutRootView}>
        <StatusBar
          backgroundColor={"#f29304"}
          barStyle={"light-content"}
        ></StatusBar>

        <Header navigation={navigation} route={route} user={user.avatar} />

        {!selectedImage && (
          <View
            style={{
              justifyContent: "center",
              alignItems: "center",
              marginTop: 15,
            }}
          >
            <TouchableOpacity
              style={{
                alignItems: "center",
                marginBottom: 20,
                width: 120,
                height: 120,
                borderWidth: 1,
                borderRadius: 120,
              }}
              onPress={sendDataToMySql}
            >
              {user.avatar == null ? (
                <Image
                  style={{
                    width: 120,
                    height: 120,
                    resizeMode: "contain",
                    borderWidth: 1,
                    borderRadius: 120,
                  }}
                  source={{ uri: avatar_cover }}
                />
              ) : (
                <Image
                  style={{
                    width: 120,
                    height: 120,
                    resizeMode: "contain",
                    borderWidth: 1,
                    borderColor: user.color,
                    borderRadius: 120,
                  }}
                  source={{ uri: url + "" + user.avatar }}
                />
              )}
            </TouchableOpacity>
          </View>
        )}

        {selectedImage && (
          <TouchableOpacity
            style={{ alignItems: "center", marginBottom: 20, marginTop: 15 }}
            onPress={sendDataToMySql}
          >
            <Image
              style={{
                width: 120,
                height: 120,
                resizeMode: "contain",
                borderWidth: 1,
                borderRadius: 120,
              }}
              source={{ uri: selectedImage }}
            />
          </TouchableOpacity>
        )}

        <View
          style={{
            paddingHorizontal: 15,
          }}
        >
          <View
            style={{ flexDirection: "column", justifyContent: "space-between", marginBottom: 20 }}
          >
            <View
              style={{
                width: "100%",
                height: 40,
                backgroundColor: "#5F6571",
                borderRadius: 3,
                marginBottom: 20,
              }}
            >
              <TextInput
                placeholder="Votre adresse email"
                style={{
                  width: "100%",
                  height: 40,
                  borderRadius: 10,
                  fontFamily: "Outfit_400Regular",
                  color: "white",
                  paddingLeft: 10,
                }}
                value={user.nom}
                // onChangeText={(text) => setEmail(text)}
              />
            </View>

            <View
              style={{
                width: "100%",
                height: 40,
                backgroundColor: "#5F6571",
                borderRadius: 3,
              }}
            >
              <TextInput
                placeholder="Votre adresse email"
                style={{
                  width: "100%",
                  height: 40,
                  borderRadius: 10,
                  fontFamily: "Outfit_400Regular",
                  color: "white",
                  paddingLeft: 10,
                }}
                value={user.phone}
                // onChangeText={(text) => setEmail(text)}
              />
            </View>
          </View>

          <View
            style={{ flexDirection: "column", justifyContent: "space-between", marginBottom: 20 }}
          >
            <View
              style={{
                width: "100%",
                height: 40,
                backgroundColor: "#5F6571",
                borderRadius: 3,
                marginBottom: 20
              }}
            >
              <TextInput
                placeholder="Votre adresse email"
                style={{
                  width: "100%",
                  height: 40,
                  borderRadius: 10,
                  fontFamily: "Outfit_400Regular",
                  color: "white",
                  paddingLeft: 10,
                }}
                value={user.email}
                // onChangeText={(text) => setEmail(text)}
              />
            </View>

            {/* <View
              style={{
                width: "100%",
                height: 40,
                backgroundColor: "#5F6571",
                borderRadius: 3,
              }}
            >
              <TextInput
                placeholder="Votre adresse email"
                style={{
                  width: "100%",
                  height: 40,
                  borderRadius: 10,
                  fontFamily: "Outfit_400Regular",
                  color: "white",
                  paddingLeft: 10,
                }}
                value={user.stat}
                // onChangeText={(text) => setEmail(text)}
              />
            </View> */}
          </View>

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
});
